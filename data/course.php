<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col">
        <div class="card shadow-sm">
            <img src="./Home/H3/Homework.jpg" alt="">
            <div class="card-body">
                <p class="card-text text-dark"><?php $name = trim($_REQUEST['class-name']); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-outline-secondary" href="./Home/H3/index.html">View</a>
                    </div>
                    <small class="text-muted">
<?php $data = '13.11.2021';$time = strtotime($data);$today = time();$day = ($today - $time)/86400;$day = floor($day);echo $day." days"; ?>
                    </small>
            </div>
        </div>
    </div>
    </div>
</body>

</html>