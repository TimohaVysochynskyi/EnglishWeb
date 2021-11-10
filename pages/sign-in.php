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
    <h1 align="center" style="margin-bottom: 20px;">Sign in and Sign-up form for students</h1>
    <div class="container" id="container">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="form-container sign-up-container">
            <form action="../validation/check.php" method="post">
                <h1>Sign up</h1>
                <span>or registration</span>
                <input type="text" name="name" id="name" placeholder="Name" />
                <input type="text" name="login" id="login" placeholder="Login" />
                <input type="email" name="email" id="email" placeholder="Email" />
                <input type="password" name="pass" id="pass" placeholder="Password" />
                <input type="text" name="phone" id="phone" placeholder="Phone number" />
                <input type="number" name="age" id="age" placeholder="Age" />
                <input type="text" name="country" id="country" placeholder="Country" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="../validation/auth.php" method="post">
                <h1>Sign in</h1>
                <span>or use your account</span>
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
                    <br>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <br>
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