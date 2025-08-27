<?php


if (isset($_POST['signup-submit'])) {
    require_once '../config/database.php';
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];



    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location:../pages/signup.php?error=invalidusername&email");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:../pages/signup.php?error=invalidemail");
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location:../pages/signup.php?error=invalidusername");
        exit();
    } elseif ($password != $confirmPassword) {
        header("Location:../pages/signup.php?error=pwddontmatch");
        exit();
    } else {
        $sql = "SELECT username FROM gamecard WHERE username='$username';";
        $res = mysqli_query($connex, $sql); //$connex vient de config/database.php
        if (!$res) {
            header("Location:../pages/signup.php?error=sqlerror");
            exit();
        } else {
            $resultcheck = mysqli_num_rows($res);
            if ($resultcheck > 0) {
                header("Location:../pages/signup.php?error=usernametaken");
                exit();
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $insertValueSql = "INSERT INTO gamecard (name, username, email, password) VALUES ('$name', '$username', '$email', '$hashedPassword');";
                $result = mysqli_query($connex, $insertValueSql);
                if (!$result) {
                    header("Location:../pages/signup.php?error=sqlerror");
                    exit();
                } else {
                    header("Location:../pages/signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    // mysqli_close($connex);
} else {
    header("Location: ../pages/signup.php?message");
    exit();
}