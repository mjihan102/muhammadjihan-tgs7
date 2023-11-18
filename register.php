<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./backend/style.css">
</head>
<body>
    <div class="container">
        <form action="./backend/register.php" method="post" class="login-email">
            <p style="font-size: 2rem; font-weight: 850;">REGISTER</p>
            <div class="input-group"><input type="text" placeholder="Nama Lengkap" name="name"></div>

            <div class="input-group"><input type="text" placeholder="Username" name="username"></div>

            <div class="input-group"><input type="text" placeholder="Email" name="email"></div>

            <div class="input-group"><input type="password" placeholder="Password" name="password"></div>

            <div class="input-group"><input type="password" placeholder="Konfirmasi Password" name="konfirmasi"></div>
            
            <div class="input-group"><button name="submit" value="register" class="btn">Register</button></div>

            <p class="login-register-text">Have an Account? <a href="page_login.php">Log In</a></p>
        </form>
    </div>
</body>
</html>