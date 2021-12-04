<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."bot228");

    require "./connect.php";
    $result = $mysql->query("SELECT *  FROM `register` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Такого чела не знайдено";
        exit();
    }

    setcookie('name', $user['name'], time() + 3600 * 24 * 7, "/");
    setcookie('login', $user['login'], time() + 3600 * 24 * 7, "/");
    setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");
    setcookie('pass', $user['pass'], time() + 3600 * 24 * 7, "/");
    setcookie('discord', $user['discord'], time() + 3600 * 24 * 7, "/");
    setcookie('twitter', $user['twitter'], time() + 3600 * 24 * 7, "/");
    setcookie('instagram', $user['instagram'], time() + 3600 * 24 * 7, "/");

    $mysql->close();

    header("Location: ../index.php");
?>