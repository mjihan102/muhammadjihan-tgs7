<?php
session_start();
session_destroy();
// header('Location:index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mjihan Lagi belajar</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: poppins, sans-serif;
        }
        body{
            background-image: url(https://aptechsaigon.edu.vn/gw-content/images/1611914194-PgFFC0O.jpg);
            min-height: 100vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            /* width: 450px; */
            /* max-width: 450px; */
            /* min-height: 450px; */
            /* background-color: rgb(28, 183, 194); */
            border-radius: 20px;
            box-shadow: 1px, 1px, 50px black;
            padding: 40px, 30px;
        }

        .btn{
            width: 400px;
            height: 300px;
            /* background-color: brown; */
            border-radius: 15px;
            box-shadow: 1px, 1px, 50px blue;
            padding: 40px, 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-group a{
            height: 100px;
            width: 250px;
            background-size: cover;
            background-color: rgb(15, 10, 54);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            text-decoration: none;
            text-align: center;
            margin-right: 20px;
            border-radius: 20px;
            font-size: 50px;
        }

        .btn-group2 a{
            height: 100px;
            width: 250px;
            background-size: cover;
            background-color: rgb(15, 10, 54);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            text-decoration: none;
            text-align: center;
            margin-left: 1px;
            border-radius: 20px;
            font-size: 50px;
        }

        .btn-group a:hover{
            background-color: crimson;
            transition: all 1s;
            transform: translate(-20px);
        }

        .btn-group2 a:hover{
            background-color: crimson;
            transition: all 1s;
            transform: translate(20px);
        }

        .footer{
            text-align: center;
            color: #fff;
            font-size: 15px;
            font-weight: 700;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="btn">
            <label class="btn-group"><a href="register.php">Sign Up</a></label>
            <label class="btn-group2"><a href="page_login.php">Login</a></label>
        </div>
        <br>
        <footer>
            <div class="footer">
                <p>&copy;2023 designed by <span>Muhammad Jihan</span></p>
            </div>
        </footer>
    </div>
</body>
</html>