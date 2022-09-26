<?php
include 'koneksi.php';

if (isset($_POST['btnLogin'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']) ;

    $query=mysqli_query($konek,"SELECT * FROM tb_user WHERE username='$email'");
    $data=mysqli_fetch_array($query);


    if (mysqli_num_rows($query)==1) {
        if (password_verify($password, $data['password'])){
            //login valid
            session_start();
            $_SESSION['email']=$data['email'];
            header('location: Home.php');
        } else {
            //password salah;
            header('location:login.php?pesan=Password Salah');
        }

    }else {
        //Username salah;
        header('location:login.php?pesan=Email Salah');
    }
}
?>