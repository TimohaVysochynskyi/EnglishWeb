<?php
    $name = filter_var(trim($_POST['name']), //var name
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']), //var login
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), //var email
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), //var pass
    FILTER_SANITIZE_STRING);
    $discord = ' ';
    $twitter = ' ';
    $instagram = ' ';
    $avatar = ' ';
    
    //////////CHECKING\\\\\\\\\\

    if(mb_strlen($name) < 5 || mb_strlen($name) > 30){
        echo "Incorrect name, chel";
        exit();
    } else if(mb_strlen($login) < 5 || mb_strlen($login) > 30){
        echo "Incorrect login, chel";
        exit();
    } else if(mb_strlen($email) < 6 || mb_strlen($email) > 50){
        echo "Incorrect email, chel";
        exit();
    } else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 30){
        echo "Incorrect password, chel";
        exit();
    }
    $command = ("SELECT COUNT(*) FROM `register` WHERE `login`='$login'");
    $member_result = mysqli_query($command);
    $mdata = mysqli_fetch_assoc($member_result);

    if($mdata['COUNT(*)'] > 0) {
        echo "Такий бот вже є";
        //user with that first and last name already exists
    } else{
        $pass = md5($pass."bot228"); //add salt to password
    require "./connect.php"; //connect to database
    $mysql->query("INSERT INTO `register` (`name`, `login`, `pass`, `email`, `discord`, `twitter`, `instagram`, `avatar`)
    VALUES('$name', '$login', '$pass', '$email', '$discord', '$twitter', '$instagram', '$avatar')");
    $result = $mysql->query("SELECT *  FROM `register` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();

    setcookie('name', $user['name'], time() + 3600 * 24 * 7, "/");
    setcookie('login', $user['login'], time() + 3600 * 24 * 7, "/");
    setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");
    setcookie('pass', $user['pass'], time() + 3600 * 24 * 7, "/");
    setcookie('discord', $user['discord'], time() + 3600 * 24 * 7, "/");
    setcookie('twitter', $user['twitter'], time() + 3600 * 24 * 7, "/");
    setcookie('instagram', $user['instagram'], time() + 3600 * 24 * 7, "/");
    $mysql->close();
    }

    header("Location: ../index.php");
?>