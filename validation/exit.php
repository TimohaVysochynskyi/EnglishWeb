<?php
    setcookie('user', $user['name'], time() - 3600 * 24 * 7, "/");
    setcookie('login', $user['login'], time() - 3600 * 24 * 7, "/");
    setcookie('pass', $user['pass'], time() - 3600 * 24 * 7, "/");
    setcookie('phone', $user['phone'], time() - 3600 * 24 * 7, "/");
    setcookie('age', $user['age'], time() - 3600 * 24 * 7, "/");
    setcookie('country', $user['country'], time() - 3600 * 24 * 7, "/");
    setcookie('points', $user['points'], time() - 3600 * 24 * 7, "/");
    setcookie('level', $user['level'], time() - 3600 * 24 * 7, "/");
    setcookie('superuser', 0, time() - 3600 * 24 * 7, "/");
    setcookie('superuser', 1, time() - 3600 * 24 * 7, "/");
    header("Location: ../index.php");
?>