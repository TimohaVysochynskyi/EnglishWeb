<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enslish | New classroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <form action="./new-course.php" method="post" class="col">
                <h1 align="center" class="mb-2">Create course</h1>
                <input type="text" name="class-name" placeholder="Title of classroom" class="form-control col mt-2 col m-lg-1">
                <input type="text" name="class-description" placeholder="Description" class="form-control mt-2 col m-lg-1">
                <input type="text" name="class-teacher" placeholder="Name of a teacher" class="form-control mt-2 col m-lg-1">
                <h4>Your code: <?=$_COOKIE['code']?></h4>
                <button type="submit" class="btn btn-outline-primary col m-lg-1">Create course</button>
            </form> 
            <form action="./join-course.php" method="post" class="col">
                <h1 align="center">Join course</h1>
                <div class="row">
                    <input type="text" name="code" placeholder="Code" class="form-control col m-lg-1">
                    <button type="submit" class="btn btn-outline-primary col m-lg-1">Join course</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>