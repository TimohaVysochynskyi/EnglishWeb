<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English | Login</title>
    <link rel="stylesheet" href="../css/sign-in.css">
</head>

<body>
    <button><a href="../index.php" style="color: white;">Back</a></button>
    <h1 align="center" style="margin-bottom: 20px;">Sign in and Sign-up form for teachers</h1>
    <div class="container" id="container">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="form-container sign-up-container">
            <form action="../validation/super-user-check.php" method="post">
                <h1>Sign up</h1>
                <span>or create a new superuser account</span>
                <input type="text" name="name" id="name" placeholder="Name" />
                <input type="text" name="login" id="login" placeholder="Login" />
                <input type="email" name="email" id="email" placeholder="Email" />
                <input type="password" name="pass" id="pass" placeholder="Password" />
                <input type="tel" name="phone" id="phone" placeholder="Phone number" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="../validation/super-user-auth.php" method="post">
                <h1>Sign in</h1>
                <span>login to your superuser account</span>
                <input type="text" name="login" id="login" placeholder="Login" />
                <input type="email" name="email" id="email" placeholder="Email" />
                <input type="password" name="pass" id="pass" placeholder="Password" />
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p style="font-size: 16px;">Create a new superuser account to evaluate and view projects of your
                        pupils</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p style="font-size: 16px;">You need to login like a superuser only one time</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
        <?php else:?>
        <p>Hi,
            <?=$_COOKIE['user']?>. To exit press <a href="../validation/exit.php">here</a>
        </p>
        <?php endif;?>
    </div>

    <script src="../js/sign-in.js"></script>
</body>

</html>
