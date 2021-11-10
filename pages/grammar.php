<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English | Homework</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <header class="p-1 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="align-items-center ">
            <img width="100px" src="https://i.ibb.co/hmZRhNL/logo.png" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <?php if($_COOKIE['user'] != ''): ?>
          <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="./vocablurary.php" class="nav-link px-2 text-white">Vocabulary</a></li>
          <li><a href="./grammar.php" class="nav-link px-2 text-secondary">Grammar</a></li>
          <li><a href="./homework.php" class="nav-link px-2 text-white">Homework</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Donate</a></li>
          <li><a href="./about.html" class="nav-link px-2 text-white">About</a></li>
        <?php else: ?>
          <li><a href="../index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Donate</a></li>
          <li><a href="./about.html" class="nav-link px-2 text-white">About</a></li>
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

        <section class="py-3 text-center" style="background-color: #181818;">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light text-white"><strong>Grammar</strong></h1>
                    <p class="lead text-white">Here you can find all grammar and rules</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <!--Here going the next col-block-->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Present Simple</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./Present Simple/teory.html">View</a>
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="./Present Simple/examples.html">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Present Continious</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Future Simple</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <!--Here going the next col-block-->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Past Simple</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Past Continious</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Present Perfect</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <!--Here going the next col-block-->
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Present Perfect Continious</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Past Perfect</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p class="card-text text-dark">Past Perfect Continious</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">View</a>
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Examples</a>
                                    </div>
                                    <small class="text-muted">1 day</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <hr>
    <footer class="py-5 my-4 bg-dark">
        <div class="container mb-5">
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
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="../index.php" class="nav-link px-2 text-light">Album</a>
            </li>
            <li class="nav-item"><a href="../pages/vocablurary.php" class="nav-link px-2 text-light">Vocablurary</a>
            </li>
            <li class="nav-item"><a href="../pages/grammar.php" class="nav-link px-2 text-light">Grammar</a></li>
            <li class="nav-item"><a href="../pages/homework.php" class="nav-link px-2 text-light">Homework</a></li>
            <li class="nav-item"><a href="../pages/about.html" class="nav-link px-2 text-light">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-5 text-end"><b><i>Back to top</i></b></a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Company, Inc</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
</body>

</html>