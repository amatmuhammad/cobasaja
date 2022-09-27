<!DOCTYPE html>

<?php

session_start();
if (isset($_SESSION['email'])) {
    header('location:login.php');
    exit;
}

?>


<?php
include 'koneksi.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedChecker</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='assets/img/logo.png'>MedChecker</a></div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="Home.php">Beranda</a>
                    </li>
                    <li>
                        <a href="obat.php">Obat A-Z</a>
                    </li>
                    <li>
                        <a href="#">Interaksi Obat</a>
                    </li>
                    <li>
                        <a href="logout.php" class="tbl-biru">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contentBox">
        <h1>Interaksi obat</h1>
        <p class='noprint'></p>


        <div id="search-box">
            <form method="get" action="">
                <div class="search-box-action">
                    <label>
                        <span class="search-box-label-placeholder">Obat</span>
                        <input type="text" id="livesearch" class="livesearch" name='searchterm' placeholder='Ketikan nama obat' aria-describedby='hint-interactions-search'>
                    </label>
                    <input class="ddc-btn" type="submit" value="Cari">
                </div>
                <span id='hint-interactions-search' class='ddc-form-hint noprint'>Silahkan ketik nama bahan obat </span>
            </form>
        </div>

    </div>

</body>

</html>