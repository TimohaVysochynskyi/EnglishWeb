<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSGO Showmatches | Sign-up</title>
    <link rel="stylesheet" href="../css/sign-in.css">
</head>

<body style="background-image: url(../images/background3.jpg);">
    <button><a href="../index.php" style="color: white;">Back</a></button>
    <div class="container right-panel-active" id="container" style="margin-top: 50px;">
        <div class="form-container sign-up-container">
            <form action="../auth/check.php" method="post">
                <h1>Sign up</h1>
                <span>or registration</span>
                <input type="text" name="name" id="name" placeholder="Name" />
                <input type="text" name="login" id="login" placeholder="Login" />
                <input type="email" name="email" id="email" placeholder="Email" />
                <input type="password" name="pass" id="pass" placeholder="Password" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="../auth/auth.php" method="post">
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
    </div>

    <script src="../js/sign-in.js"></script>
</body>

</html>