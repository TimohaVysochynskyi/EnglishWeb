<?php
    $name = $_COOKIE['name'];
    $login = $_COOKIE['login'];
    $pass = $_COOKIE['pass'];
    $discord = $_COOKIE['discord'];
    $twitter = $_COOKIE['twitter'];
    $instagram = $_COOKIE['instagram'];
    $newdiscord = filter_var(trim($_POST['newdiscord']),
    FILTER_SANITIZE_STRING);
    $newtwitter = filter_var(trim($_POST['newtwitter']),
    FILTER_SANITIZE_STRING);
    $newinstagram = filter_var(trim($_POST['newinstagram']),
    FILTER_SANITIZE_STRING);
    $newname = filter_var(trim($_POST['newname']),
    FILTER_SANITIZE_STRING);
    $newlogin = filter_var(trim($_POST['newlogin']),
    FILTER_SANITIZE_STRING);
    $newemail = filter_var(trim($_POST['newemail']),
    FILTER_SANITIZE_STRING);

    require "../auth/connect.php";

    if(isset($_POST['upload'])){
        if(!empty($_FILES['newavatar']['tmp_name'])){
            $img = addcslashes(file_get_contents($_FILES['newavatar']['tmp_name']));
            $mysql->query("INSERT INTO `register` (`avatar`) VALUES ('$img')");
            echo "Hello";
        }
    }

    $mysql->query("UPDATE `register` SET `name` = '$newname', `login` = '$newlogin', `discord` = '$newdiscord', `twitter` = '$newtwitter', `instagram` = '$newinstagram' WHERE `login` = '$login' AND `pass` = '$pass'");
    $result = $mysql->query("SELECT *  FROM `register` WHERE `login` = '$newlogin' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();

    setcookie('name', $user['name'], time() + 3600 * 24 * 7, "/");
    setcookie('login', $user['login'], time() + 3600 * 24 * 7, "/");
    setcookie('pass', $user['pass'], time() + 3600 * 24 * 7, "/");
    setcookie('discord', $user['discord'], time() + 3600 * 24 * 7, "/");
    setcookie('twitter', $user['twitter'], time() + 3600 * 24 * 7, "/");
    setcookie('instagram', $user['instagram'], time() + 3600 * 24 * 7, "/");
    $mysql->close();

    //header("Location: ../pages/profile.php");
?>