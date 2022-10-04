<!doctype html>
<?php
error_reporting (0);
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Beranda</title>
  </head>
  <body>
    
      <!-- navbar -->

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
                        <a href="interaksi.php">Interaksi Obat</a>
                    </li>
                    <li>
                        <div class="search-bar">
                            <form class="d-flex mt-3" method="post">
                                <input class="form-control me-2" type="search" name="keyword" value="<?=$_POST['keyword']?>"  placeholder="Masukan bahan obat " aria-label="Search">
                                <button class="btn btn-outline-secondary" type="submit" name="cari">Cari</button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="logout.php" class="tbl-biru">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



          <!-- <nav>
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
              <p class='noprint'></p> -->
      
      
              <!-- <div id="search-box">
              <form action="" method="post">
                    <div class="input-group mt-5">
                        <input type="text" name=keyword class="form-control" value="<?=$_POST['keyword']?> " placeholder="Masukan bahan obat " >
                        <div class="input-group-append">
                            <button type="submit" name="cari" class="btn btn-secondary pl-4 pr-4">Cari</button>
                        </div>
                    </div>
                </form> -->
                  <!-- <form method="post" action="">
                      <div class="search-box-action">
                          <label>
                              <span class="search-box-label-placeholder">Obat</span>
                              <input type="text" name="keyword" id="livesearch" class="livesearch" name='searchterm' placeholder='Ketikan nama obat' aria-describedby='hint-interactions-search'>
                          </label>
                            <button class="btn btn-info" type="submit" value="cari"></button>
                      </div>
                      <span id='hint-interactions-search' class='ddc-form-hint noprint'>Silahkan ketik nama bahan obat </span>
                  </form> -->

                  
              <!-- </div>
      
          </div> -->
      <!-- akhirnavbar -->
      
      <!-- form -->
          <div class="card row justify-content-center-start " >
              <div class="card-body justify-content-center" >
              <div class="container">
                  <div class="row">
                  <div class="col-md-auto">
                  </div>
              </div>
      
                  
      
              <table class="table table-bordered table-hover mt-5 "   >
                  <thead class="text-center justify-content-center" style="background-color:#cccccc;">
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Bahan</th>
                          <th scope="col">Interaksi</th>
                          
                  
                      </tr>
                  </thead>
                  <tbody>
                      <?php
      
                      //fitur search
      
                      if (isset($_POST['cari'])){
                          $keyword = $_POST['keyword'];
                          $query = "SELECT * FROM tb_interaksi WHERE Nama_bahan LIKE '%$keyword%' or interaksi LIKE '%$keyword%' order by id asc";
                      }else{
                          $query = "SELECT * FROM tb_interaksi";
                         
                      }
      
                      // if (isset($_POST['cari'])){
                      //     $keyword = $_POST['keyword'];
                      //     $query = "SELECT * FROM list_eksipien WHERE Nama_resmi LIKE '%$keyword%' OR Nama_lain LIKE '%$keyword%'";
                      //     $sql = mysqli_query($konek, $query); 
                      // }else{
                      //     echo "<script>alert('keyword tidak cocok');
                      //     window.location.href = 'obat.php';
                      //     </script>";
                      // }
      
                      
                      $sql = mysqli_query($konek, $query);
                      $no=1;
                      while($data = mysqli_fetch_array($sql)){
      
                      
                      
                      ?>
                      <tr>
                      <th scope="row"><?php echo $no ;?></th>
                      
                      <td><?php echo $data['Nama_bahan'];?></td>
                      <td><?php echo $data['interaksi'];?></td>
                      
                      
                      </tr>
                      
                      
                      <?php
                      $no++;
      
                      }
      
                      ?>
                      
                  </tbody>
              </table>
              </div>
          </div>
      <!-- akhir form -->






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>




