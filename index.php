<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English | Main</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"></path>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
  </symbol>
</svg>
</head>

<body>
<header class="p-1 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="align-items-center ">
            <img width="100px" src="./images/logo.png" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <?php if($_COOKIE['user'] != ''): ?>
          <li><a href="./index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="./pages/vocablurary.php" class="nav-link px-2 text-white">Vocabulary</a></li>
          <li><a href="./pages/grammar.php" class="nav-link px-2 text-white">Grammar</a></li>
          <li><a href="./pages/homework.php" class="nav-link px-2 text-white">Homework</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Donate</a></li>
          <li><a href="./pages/about.html" class="nav-link px-2 text-white">About</a></li>
        <?php else: ?>
          <li><a href="./index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Donate</a></li>
          <li><a href="./pages/about.html" class="nav-link px-2 text-white">About</a></li>
        <?php endif ?>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <?php if($_COOKIE['user'] == ''): ?>
        <div class="text-end py-lg-3 py-5">
            <a href="./pages/sign-in.php" class="btn btn-outline-light me-2">Student</a>
            <a href="./pages/sign-in-superuser.php" class="btn btn-warning">Teacher</a>
        </div>
        <?php else:?>
            <a href="./pages/profile.php" class="btn btn-outline-light me-2">Profile, <?=$_COOKIE['user']?></a>
        <?php endif;?>
      </div>
    </div>
</header>

    <main>
        <div class="album py-5 bg-light mb-5">
            <?php if($_COOKIE['superuser'] == 1): ?>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="./pages/Home/H2/Homework.png" alt="">
                            <div class="card-body">
                                <p class="card-text text-dark">Homework 05/11/2021</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/Home/H2/index.php">View</a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/Home/H2/index.php">Translate</a>
                                    </div>
                                    <small class="text-muted">
<?php $data = '05.11.2021';$time = strtotime($data);$today = time();$day = ($today - $time)/86400;$day = floor($day);echo $day." days"; ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col">
                        <div class="card shadow-sm">
                            <img src="./pages/Home/H1/Homework.png" alt="">
                            <div class="card-body">
                                <p class="card-text text-dark">Homework 03/11/2021</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/Home/H1/index.php">View</a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/Home/H1/index.php">Translate</a>
                                    </div>
                                    <small class="text-muted">
<?php $data = '03.11.2021';$time = strtotime($data);$today = time();$day = ($today - $time)/86400;$day = floor($day);echo $day." days"; ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="./images/Virtual Reality.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text text-dark">Virtual Reality</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/VirtualReality/index.html">View</a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/VirtualReality/index.ua.html">Translate</a>
                                    </div>
                                    <small class="text-muted">
<?php $data = '29.10.2021';$time = strtotime($data);$today = time();$day = ($today - $time)/86400;$day = floor($day);echo $day." days"; ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">

                            <img src="./images/Space travels.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text text-dark">Space Travels</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/SpaceTravels/index.html">View</a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/SpaceTravels/index.ua.html">Translate</a>
                                    </div>
                                    <small class="text-muted">
<?php $data = '27.10.2021';$time = strtotime($data);$today = time();$day = ($today - $time)/86400;$day = floor($day);echo $day." days"; ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="./images/ProgImg.jpg" alt="">
                            <div class="card-body">
                                <p class="card-text text-dark">Programming presentation</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/Programming Presentation/index.html">English</a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./pages/Programming Presentation/index.ua.html">Ukrainian</a>
                                    </div>
                                    <small class="text-muted">
<?php $data = '22.10.2021';$time = strtotime($data);$today = time();$day = ($today - $time)/86400;$day = floor($day);echo $day." days"; ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($_COOKIE['superuser'] == 0):?>
            <img src="./images/notasks.png" style="margin-left: 45%" width="10%" alt="">
            <p class="text-secondary" align="center">You haven't got any work now =)</p>
            <?php else: ?>
                <div class="container">
                    <img src="./images/notfound.png" style="margin-left: 25%;" alt="Any tasks" class="img-notfound" width="50%">
                    <p class="text-secondary" align="center">Register or authorisate, firstly!</p>
                </div>
            <?php endif ?>
        </div>
        <div class="container">
            <main class="form-signin mt-3">
                <form action="https://formspree.io/f/xvodnnwe" method="POST">
                    <h1 class="h3 mb-3 fw-normal feedback-top text-white">Leave a feedback!</h1>

                    <div class="form-floating">
                        <input type="text" name="message" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="email" name="_replyto" class="form-control" id="floatingPassword"
                            placeholder="Email">
                        <label for="floatingPassword">Email</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="message" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Message</label>
                    </div>
                    <br>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                </form>
            </main>
        </div>

    </main>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <?php if($_COOKIE['login'] != ''): ?>
            <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-light">Album</a>
            </li>
            <li class="nav-item"><a href="./pages/vocablurary.php" class="nav-link px-2 text-light">Vocabulary</a>
            </li>
            <li class="nav-item"><a href="./pages/grammar.php" class="nav-link px-2 text-light">Grammar</a></li>
            <li class="nav-item"><a href="./pages/homework.php" class="nav-link px-2 text-light">Homework</a></li>
            <li class="nav-item"><a href="./pages/about.html" class="nav-link px-2 text-light">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-5 text-end"><b><i>Back to top</i></b></a></li>
            <?php else: ?>
            <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-light">Album</a>
            </li>
            <li class="nav-item"><a href="./pages/about.html" class="nav-link px-2 text-light">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-5 text-end"><b><i>Back to top</i></b></a></li>
            <?php endif ?>
        </ul>
        <p class="text-center text-muted">© 2021 EnglishWeb, Inc</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/socket.io/socket.io.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>




</body>

</html>