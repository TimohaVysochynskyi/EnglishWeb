<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $age = filter_var(trim($_POST['age']),
    FILTER_SANITIZE_STRING);
    $country = filter_var(trim($_POST['country']),
    FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);
    $twitter = ' ';
    $instagram = ' ';
    $facebook = ' ';
    $points = 0;
    $level = 0;
    $superuser = 0;

    //require("../php/progress.php");

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Невірний логін";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
        echo "Невірне ім'я";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 20){
        echo "Невірний пароль";
        exit();
    } else if(mb_strlen($age) < 1 || mb_strlen($age) > 3){
        echo "Неможливий вік";
        exit();
    } else if(mb_strlen($email) < 5 || mb_strlen($email) > 50){
        echo "Неможливий email";
        exit();
    } else if(mb_strlen($country) < 1 || mb_strlen($country) > 30){
        echo "Неможливий country";
        exit();
    } else if(mb_strlen($phone) < 5 || mb_strlen($phone) > 30){
        echo "Неможливий phone";
        exit();
    }

    $pass = md5($pass."noob");

    require "./connect.php";
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `age`, `email`, `country`, `phone`, `points`, `level`, `twitter`, `instagram`, `facebook`, `superuser`)
    VALUES('$login', '$pass', '$name', '$age', '$email', '$country', '$phone', '$points', '$level', '$twitter', '$instagram', '$facebook', '$superuser')");

    $result = $mysql->query("SELECT *  FROM `users` WHERE `phone` = '$phone' AND `country` = '$country'
     AND `age` = '$age' AND `points` = '$points'");
    $user = $result->fetch_assoc();
    setcookie('phone', $user['phone'], time() + 3600 * 24 * 7, "/");
    setcookie('country', $user['country'], time() + 3600 * 24 * 7, "/");
    setcookie('age', $user['age'], time() + 3600 * 24 * 7, "/");
    setcookie('points', $user['points'], time() + 3600 * 24 * 7, "/");
    $mysql->close();

    header("Location: ../index.php");
?>
