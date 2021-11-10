<?php 
    $name = $_COOKIE['user'];
    require "../validation/connect.php";
    $mysql->query("DELETE FROM `users` WHERE `name` = '$name'");
    setcookie('name', $user['name'], time() + 3600 * 24 * 7, "/");
    require "./exit.php";
    $mysql->close();
    header("Location: ../index.php");
?>