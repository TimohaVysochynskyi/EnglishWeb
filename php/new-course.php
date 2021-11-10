<?php
    $classname = filter_var(trim($_POST['class-name']),
    FILTER_SANITIZE_STRING);
    $classdescription = filter_var(trim($_POST['class-description']),
    FILTER_SANITIZE_STRING);
    $classteacher = filter_var(trim($_POST['class-teacher']),
    FILTER_SANITIZE_STRING);
    $code = rand();

    require "../validation/connect.php";

    $mysql->query("INSERT INTO `codes` (`class-name`, `class-description`, `class-teacher`, `class-code`)
    VALUES('$classname', '$classdescription', '$classteacher', '$code')");

    setcookie('classname', $classname, time() + 3600 * 24 * 30, "/");
    setcookie('classdescription', $classdescription, time() + 3600 * 24 * 30, "/");
    setcookie('classteacher', $classteacher, time() + 3600 * 24 * 30, "/");
    setcookie('code', $code, time() + 3600 * 24 * 30, "/");
    header("Location: ./create-course.php");
?>