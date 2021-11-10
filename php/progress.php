<?php
    $mark = filter_var(trim($_POST['mark']),
    FILTER_SANITIZE_STRING);
    $points = $_COOKIE['points'] + $mark;
    $name = $_COOKIE['user'];


    require "../validation/connect.php";

    $mysql->query("UPDATE `users` SET `points` = '$points' WHERE `name` = '$name'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `points` = '$points'");
    $user = $result->fetch_assoc();
    setcookie('points', $user['points'], time() + 3600 * 24 * 7, "/");
    $mysql->close();

    header("Location: ../pages/homework.php"); 

?>