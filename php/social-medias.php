<?php
    $newtwitter = filter_var(trim($_POST['newtwitter']),
    FILTER_SANITIZE_STRING);
    $twitter = $_COOKIE['twitter'];
    $newinstagram = filter_var(trim($_POST['newinstagram']),
    FILTER_SANITIZE_STRING);
    $instagram = $_COOKIE['instagram'];
    $newfacebook = filter_var(trim($_POST['newfacebook']),
    FILTER_SANITIZE_STRING);
    $facebook = $_COOKIE['facebook'];
    $login = $_COOKIE['login'];

    require "../validation/connect.php";

    $mysql->query("UPDATE `users` SET `twitter` = '$newtwitter' WHERE `login` = '$login'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `twitter` = '$newtwitter'");
    $mysql->query("UPDATE `users` SET `instagram` = '$newinstagram' WHERE `login` = '$login'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `instagram` = '$newinstagram'");
    $mysql->query("UPDATE `users` SET `facebook` = '$newinstagram' WHERE `login` = '$login'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `facebook` = '$newfacebook'");
    $user = $result->fetch_assoc();

    setcookie('twitter', $user['twitter'], time() + 3600 * 24 * 7, "/");
    setcookie('instagram', $user['instagram'], time() + 3600 * 24 * 7, "/");
    setcookie('facebook', $user['facebook'], time() + 3600 * 24 * 7, "/");

    $mysql->close();
    header("Location: ../pages/profile.php");
?>