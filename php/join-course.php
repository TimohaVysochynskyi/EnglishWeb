<?php
    $code = filter_var(trim($_POST['code']),
    FILTER_SANITIZE_STRING);
    $numberstudents;
    $name = $_COOKIE['user'];
    $points = $_COOKIE['points'];

    require "../validation/connect.php";
    $result = $mysql->query("SELECT *  FROM `codes` WHERE `class-code` = '$code'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Такого класу не знайдено";
        exit();
    }
    
    setcookie('code', $user['code'], time() + 3600 * 24 * 7, "/");

    $mysql->query("INSERT INTO `$code` (`student`, `points`)
    VALUES('$name', '$points')");
    setcookie('newcourse', true, time() + 3600 * 24 * 7, "/");

    $mysql->close();
    header("Location: ./course.php");
?>