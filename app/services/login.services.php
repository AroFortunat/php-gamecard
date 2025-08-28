<?php
if (isset($_POST["login-submit"])) {
    require_once '../config/database.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM gamecard WHERE username='$username' OR email='$username';";
    $res = mysqli_query($connex, $sql);
    if (!$res) {
        header("Location: ../pages/login.php?error=sqlerror");
        exit();

    } else {
        if ($row = mysqli_fetch_assoc($res)) {
            $pwdCheck = password_verify($password, $row["pwd"]);
            if ($pwdCheck === false) {
                header("Location: ../pages/login.php?error=invalidcredentials");
                exit();
            } elseif ($pwdCheck === true) {
                session_start();
                $_SESSION["userId"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["status"] = $row["status"];
                
            }

        } else {
            header("Location: ../pages/login.php?error=invalidcredentials");
            exit();
        }
    }
} else {
    header("Location: ../pages/login.php");
    exit();
}


?>