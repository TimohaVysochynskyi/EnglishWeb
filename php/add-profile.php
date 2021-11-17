<?php
    $newname = filter_var(trim($_POST['newname']),
    FILTER_SANITIZE_STRING);
    $name = trim($_REQUEST['name']);
    $newemail = filter_var(trim($_POST['newemail']),
    FILTER_SANITIZE_STRING);
    $email = trim($_REQUEST['email']);
    $newlogin = filter_var(trim($_POST['newlogin']),
    FILTER_SANITIZE_STRING);
    $login = trim($_REQUEST['login']);
    $newphone = filter_var(trim($_POST['newphone']),
    FILTER_SANITIZE_STRING);
    $phone = trim($_REQUEST['phone']);

    if(mb_strlen($newname) < 2 || mb_strlen($newname) > 30){
        echo "Невірний Name";
        exit();
    } else if(mb_strlen($newemail) < 4 || mb_strlen($newname) > 30){
        echo "Невірний Email";
        exit();
    } else if(mb_strlen($newlogin) < 4 || mb_strlen($newname) > 30){
        echo "Невірний Login";
        exit();
    } else if(mb_strlen($newlogin) < 5 || mb_strlen($newname) > 20){
        echo "Невірний Phone";
        exit();
    }

    require "../validation/connect.php";

    $mysql->query("UPDATE `users` SET `name` = '$newname' WHERE `name` = '$name'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `name` = '$newname'");
    $mysql->query("UPDATE `users` SET `email` = '$newemail' WHERE `email` = '$email'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `email` = '$newemail'");
    $mysql->query("UPDATE `users` SET `login` = '$newlogin' WHERE `login` = '$login'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `login` = '$newlogin'");
    $mysql->query("UPDATE `users` SET `phone` = '$newphone' WHERE `phone` = '$phone'");
    $result = $mysql->query("SELECT *  FROM `users` WHERE `phone` = '$newphone'");

    $user = $result->fetch_assoc();

    setcookie('name', $user['name'], time() + 3600 * 24 * 7, "/");
    setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");
    setcookie('login', $user['login'], time() + 3600 * 24 * 7, "/");
    setcookie('phone', $user['phone'], time() + 3600 * 24 * 7, "/");

    $mysql->close();

    header("Location: ../pages/profile.php");
?>