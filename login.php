<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="login">
            <form action="aksi_login.php" method="POST">
                <h1>Login</h1>
                <hr>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Mathter">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit" value="Login">Login</button>
                <button type="reset" value="Clear">Clear</button>
                <p>
                    <p class="login-register-text"><a href="register.php">Buat Akun?</a></p>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="images/logo1.png" alt="">
        </div>
    </div>
</body>

</html>
