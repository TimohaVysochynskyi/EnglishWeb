<?php
    $newpass = filter_var(trim($_POST['newpass']),
    FILTER_SANITIZE_STRING);
    $pass = $_COOKIE['pass'];
    $name = $_COOKIE['user'];

    require "../validation/connect.php";

    $mysql->query("UPDATE `users` SET `pass` = '$newpass' WHERE `pass` = '$pass'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `name` = '$name'");
    $user = $result->fetch_assoc();

    setcookie('pass', $user['pass'], time() + 3600 * 24 * 7, "/");

    $mysql->close();
    header("Location: ../pages/profile.php");
?>