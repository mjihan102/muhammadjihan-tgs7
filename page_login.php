<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./backend/style.css">
</head>
<body>
    <div class="container">
    <form action="./backend/login.php" method="post" class="login-email">
        <p style="font-size: 2rem; font-weight: 850;">LOGIN</p>
        <!-- <div class="input-group"><input type="text" placeholder="Username" name="username"></div> -->

        <div class="input-group"><input type="text" placeholder="Email" name="email"></div>


        <div class="input-group"><input type="password" placeholder="Password" name="password"></div>

        
        <div class="input-group"><button name="submit" value="login" class="btn">Login</button></div>

        <p class="login-register-text">Don't Have an Acoount? <a href="register.php">Daftar</a></p>
    </form>
    </div>
</body>
</html>