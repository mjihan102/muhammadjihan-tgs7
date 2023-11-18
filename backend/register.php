<?php
session_start();

require './../config/database.php';

if (isset($_POST['submit'])){

    global $db_connect;

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if($konfirmasi != $password){
        echo "password tidak sesuai";
        die;
    }

    $email_digunakan = mysqli_query($db_connect, "SELECT email FROM tbl_reg WHERE email = '$email'");
    if(mysqli_num_rows($email_digunakan) > 0){
        echo "Email Yang anda masukkan sudah digunakan";
        die;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $tgl_upload = date ('y-m-d H:i:s', time());

    $tbl_reg = mysqli_query($db_connect,"INSERT INTO tbl_reg (name,username,email,password,tgl_upload) VALUES('$name','$username','$email','$password','$tgl_upload')");

    $getuserdata = mysqli_query($db_connect,"SELECT name, role FROM tbl_reg WHERE email = '$email'");

    $sessiondata = mysqli_fetch_assoc($getuserdata);

    $_SESSION['name'] = $sessiondata['name'];
    $_SESSION['role'] = $sessiondata['role'];

    header('Location:./../profile.php');
}
?>