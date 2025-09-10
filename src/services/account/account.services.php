<?php

session_start();
// // require_once('../../config/database.php');
require_once '../../config/database.php';

$id = $_SESSION["userId"];
$sql = "DELETE FROM gamecard WHERE id='$id';";
$res = mysqli_query($connex, $sql);



if (isset($_POST["delete-account"])) {

    if (!$res) {
        header("Location: ../../pages/account.php?error=sqlerror");
        exit();
    }
    else {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../../messages/logout.delete.php");
        exit();
    }    

}