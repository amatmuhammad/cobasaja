<?php
include 'koneksi.php';

error_reporting(0);

session_start();

if(isset($_SESSION['email'])) {
    header('location: login.php');
}

if (isset($_POST['btnDaftar'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password = $cpassword) {
        $sql = "SELECT * FROM tb_user where email = '$email'";
        $result = mysqli_query($konek, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert ('Email sudah ada')</script>";
        } else {
            $sql = "INSERT INTO tb_user (username, email, password) values ('$username','$email','$password')";
            $result = mysqli_query($konek, $sql);

            if ($result) {
                echo "<script>alert('Berhasil mendaftar')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Ada sesuatu yang salah')</script>";
            }
        }
    } else {
        echo "<script>alert('password yang dimasukkan tidak sama')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <title>MedChecker</title>
    <link rel="stylesheet" type="text/css" href="styledaftar.css">
    <meta name="viewport" content="width=device-eidth, initial-scale=1.0" />
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>DAFTAR</h2>
            </div>
            <form action="" method="post" class="form">
                <label for="username" style="padding-top: 13px">&nbsp;
                    Username
                </label>
                <input id="username" class="form-content" type="username" name="username" required />
                <div class="form-border"></div>

                <label for="user-email" style="padding-top: 13px">&nbsp;
                    Email
                </label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 13px">&nbsp;
                    Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>

                <label for="confirm-user-password" style="padding-top: 13px">&nbsp;
                    Konfirmasi Password
                </label>
                <input id="confirm-user-password" class="form-content" type="cpassword" name="cpassword" required />
                <div class="form-border"></div>


                <button id="submit-btn" type="submit" name="btnDaftar" value="DAFTAR">
                    DAFTAR
                </button>

                <div class="text-center">
                    Sudah punya akun? klik <a href="login.php" id="signup">disini</a>
                </div>

            </form>

        </div>

    </div>
</body>


</html>