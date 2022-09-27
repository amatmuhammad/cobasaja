<?php
include 'koneksi.php';

session_start();

if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($konek, "SELECT * FROM tb_user where email = '$email'") ;
    $hitung = mysqli_num_rows($sql);
    $pw = mysqli_fetch_array($sql);
    $pwsekarang = $pw ['password'];

    if ($hitung>0) {
        if(password_verify($password,$pwsekarang)){
            header ('Location : Home.php');
        }else {
             echo "<script>alert('password salah');
             window.location.href = 'login.php';
             </script>";
        }

    } else {
       echo "
       <script>
        alert ('registrasi gagal');
        window.location.href = 'daftar.php';
       </script>
       ";
    }
}
