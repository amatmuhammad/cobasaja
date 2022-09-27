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
                        <a href="obat.html">Obat A-Z</a>
                    </li>
                    <li>
                        <a href="interaksi.html">Interaksi Obat</a>
                    </li>
                    <li>
                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                <input type="text" class="searching" name="query" placeholder="Search" title="Enter search keyword">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="login.php" class="tbl-biru">Masuk</a>
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
                        <span class="search-box-label-placeholder">Bahan Obat</span>
                        <input type="text" id="livesearch" class="livesearch" name='searchterm' placeholder='Cari bahan obat' aria-describedby='hint-interactions-search'>
                    </label>
                    <input class="ddc-btn" type="submit" value="Tambah">
                </div>
                <span id='hint-interactions-search' class='ddc-form-hint noprint'>Silahkan mengetik nama bahan obat yang ingin dicari</span>
            </form>
        </div>

    </div>

</body>

</html>