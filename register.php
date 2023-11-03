<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form method="POST" action="aksi_register.php" id="contactfrm" role="form">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" placeholder="Username" name="username" id="username" required>
            </div>
            <div class="input-group">
            <label for="email">Eamil</label>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
            </div>
            <div class="input-group">
            <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
            </div>
            <div class="input-group">
            <label for="confirm">Confirm Password</label>
                <input type="confirm" class="form-control" placeholder="Confirm Password" name="confirm" id="confirm" required>
            </div>
            <div class="input-group">
                <button name="register" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>