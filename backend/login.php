<?php

session_start();

require './../config/database.php';

if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $tbl_reg = mysqli_query($db_connect,"SELECT * FROM tbl_reg WHERE email = '$email'");
    if(mysqli_num_rows($tbl_reg) > 0) {
        $data = mysqli_fetch_assoc($tbl_reg);
        
        if(password_verify($password,$data['password'])) {

            //otorisasi
            $_SESSION['name'] = $data['name'];
            $_SESSION['role'] = $data['role'];


            if($_SESSION['role'] == 'admin') {

                header('Location:./../admin.php');

            } else{

                header('Location:./../profile.php');

            }

        } else {
            echo "password salah";
            die;
        }

    } else {
        echo "email atau password salah";
        die;
    }
}
?>