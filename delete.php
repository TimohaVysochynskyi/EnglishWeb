<?php
    $login = $_COOKIE['login'];
    require "./connect.php";
    $mysql->query("DELETE FROM `register` WHERE `login` = '$login'");
    setcookie('name', $user['name'], time() - 3600 * 24 * 7, "/");
    setcookie('login', $user['login'], time() - 3600 * 24 * 7, "/");
    setcookie('email', $user['email'], time() - 3600 * 24 * 7, "/");
    setcookie('pass', $user['pass'], time() - 3600 * 24 * 7, "/");
    $mysql->close();
    header("Location: ../index.php");
?>