<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showmatches | CS:GO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <section>
            <header class="header">
                <div class="logo">
                    <img src="./images/logo.png" alt="" class="logo">
                </div>
                <nav class="nav-header">
                    <ul class="list">
                        <li class="links"><a href="#" class="active">Home</a></li>
                        <li class="links"><a href="#">Tournaments</a></li>
                        <li class="links"><a href="#">Games</a></li>
                        <li class="links"><a href="#">Donate</a></li>
                        <?php if($_COOKIE['login'] == ''): ?>
                        <div class="auth-buttons">
                            <a href="./pages/sign-in.php" class="log-in">Log in</a>
                            <a href="./pages/sign-up.php" class="sign-up">Sign up</a>
                        </div>
                        <?php else: ?>
                        <div class="">
                            <a href="./pages/profile.php" class="profile-btn">Profile:
                                <?php echo $_COOKIE['name'] ?>
                            </a>
                        </div>
                        <?php endif ?>
                    </ul>
                </nav>
            </header>
            <div class="cursor" onclick="document.querySelector('.dots').classList.toggle('active');"></div>
            <div class="container">
            </div>
        </section>
    </main>
</body>

</html>