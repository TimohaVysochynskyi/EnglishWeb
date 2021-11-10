<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English | Profile </title>
    <link rel="stylesheet" href="../css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-image: url(https://i.ibb.co/WK8WbKv/backgrounf1.jpg);">
    <div class="container">
        <div class="main-body mt-5">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="../index.php" class="btn btn-outline-dark me-2"><b>Back</b></a>
                            <div class="d-flex flex-column align-items-center text-center">
                                <?php if($_COOKIE['points'] < 50 ): ?>
                                <img src="https://i.ibb.co/1M8Yfp2/avatar2.png" alt="Avatar" class="rounded-circle" width="150">
                                <?php elseif($_COOKIE['points'] > 50 && $_COOKIE['points'] < 100): ?>
                                <img src="https://i.ibb.co/yQnqc3B/avatar5.png" alt="Avatar" class="rounded-circle" width="150">
                                <?php elseif($_COOKIE['points'] > 100): ?>
                                <img src="https://i.ibb.co/0cRyDFM/avatar1.png" alt="Avatar" class="rounded-circle" width="150">
                                <?php elseif($_COOKIE['superuser'] == '1'):?>
                                <img src="https://i.ibb.co/TqDNL1K/avatar7.png" alt="Avatar" class="rounded-circle" width="150">
                                <?php endif ?>
                                <div class="mt-3">
                                    <h4>
                                        <?=$_COOKIE['user']?>
                                    </h4>
                                    <?php if($_COOKIE['superuser'] == 0): ?>
                                    <p class="text-secondary mb-1"><b>Points: </b>
                                        <?=$_COOKIE['points']?>
                                    <?php endif ?>
                                    </p>
                                    <p class="text-muted font-size-sm"><b>Status: </b>
                                    <?php if($_COOKIE['superuser'] == 1): ?>
                                      Teacher
                                    <?php else: ?>
                                      Student
                                    <?php endif ?>
                                    </p>
                                </div>
                            </div>
                            <a href="./homework.php" class="btn btn-outline-info me-2"><b>Homework</b></a>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <form action="../php/social-medias.php" method="post">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>Twitter</h6>
                                <span class="text-danger">
                                    <input type="text" name="newtwitter" id="newtwitter" class="form-control" placegolder="Twitter" value="<?=$_COOKIE['twitter']?>">
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-danger">
                                    <input type="text" name="newinstagram" id="newinstagram" class="form-control" placegolder="Instagram" value="<?=$_COOKIE['instagram']?>">
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>Facebook</h6>
                                <span class="text-danger">
                                    <input type="text" name="newfacebook" id="newfacebook" class="form-control" placegolder="Facebook" value="<?=$_COOKIE['facebook']?>">
                                </span>
                            </li>
                        </ul>
                        <button class="btn btn-outline-primary m-lg-3 col" style="width: 100px;"
                            onclick="SaveChages()" type="submit">Save</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3 row">
                        <form action="../php/add-profile.php" method="post" class="">
                            <div class="card-body">
                                <div class="row row-cols-md-3 g-5">
                                    <div class="col">
                                        <h6 class="mb-0" name="name">Name</h6>
                                    </div>
                                    <div class="col text-secondary">
                                        <input type="text" name="newname" id="newname" class="form-control"
                                            value="<?=$_COOKIE['user']?>" placeholder="Name">
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-md-3 g-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="newemail" id="newemail" class="form-control"
                                            value="<?=$_COOKIE['email']?>" placeholder="Email">
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-md-3 g-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Login</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="newlogin" id="newlogin" class="form-control"
                                            value="<?=$_COOKIE['login']?>" placeholder="Login">
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-md-3 g-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="number" name="newphone" id="newphone" class="form-control"
                                            value="<?=$_COOKIE['phone']?>" placeholder="Phone">
                                    </div>
                                </div>
                                <hr>
                                <?php if($_COOKIE['superuser'] == 0): ?>
                                <div class="row row-cols-md-3 g-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Country</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?=$_COOKIE['country']?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row row-cols-md-3 g-5">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?=$_COOKIE['age']?>
                                    </div>
                                </div>
                                <hr>
                                <?php endif ?>
                                <div class="row">
                                    <a class="btn btn-warning m-lg-4 col" target="" href="../validation/exit.php">Exit</a>
                                    <button class="btn btn-outline-primary m-lg-4 col" style="width: 100px;"
                                        onclick="SaveChages()" type="submit">Save</button>
                                    <a href="../validation/delete.php" class="btn btn-outline-danger m-lg-4 col">Delete account</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
	<script>
		$('body').on('click', '.password-checkbox', function () {
			if ($(this).is(':checked')) {
				$('#password-input').attr('type', 'text');
			} else {
				$('#password-input').attr('type', 'password');
			}
		});
	</script>
    <script src="../js/script.js"></script>
</body>

</html>
