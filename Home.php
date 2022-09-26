<!DOCTYPE html>

<?php

session_start();
if (!isset($_SESSION['username'])) {
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
                    <li><a href="Home.html">Beranda</a></li>
                    <li><a href="obat.html">Obat A-Z</a></li>
                    <li><a href="interaksi.html">Interaksi Obat</a></li>
                    <li>
                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                <input type="text" class="searching" name="query" placeholder="Search" title="Enter search keyword">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li><a href="login.html" class="tbl-biru">Masuk</a></li>
                    <li><a href="daftar.html" class="tbl-biru">Daftar</a></li>
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

    <tbody>
        <?php
        $query = "SELECT * FROM tb_produk";
        $no = 1;
        $sql = mysqli_query($konek, $query);
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $data['nama_produk']; ?></td>
                <td><?php echo $data['jml_stok']; ?></td>
                <td><?php echo $data['detail_produk']; ?></td>
                <td><img src="Gambar/<?php echo $data['Gambar']; ?>" alt="Gambar" style="width: 100px;"></td>
                <td><a href="olah.php?edit=<?php echo $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg></a>
                    <a href="proses.php?hapus=<?php echo $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg></a>
                </td>
            </tr>
        <?php
            $no++;
        } ?>

    </tbody>
</body>

</html>