<?php
    require("../validation/connect.php");
    include("../data/course.php");
    $code = trim($_REQUEST['class-code']);

    $result = $mysql->query("SELECT *  FROM `codes` WHERE `code` = '$code'");
?>