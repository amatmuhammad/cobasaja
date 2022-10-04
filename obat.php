<!doctype html>
<?php
error_reporting (0);
include 'koneksi.php';
?>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="styleobat.css">

    <title>Obat</title>
  </head>
  <body>
    

    <nav>
        <div class="wrapper">
            <div class="logo"><a href='assets/img/logo.png'>MedChecker</a></div>
            <div class="menu">
                <ul>
                    <li><a href="Home.php">Beranda</a></li>
                    <li><a href="#">Obat A-Z</a></li>
                    <li><a href="home.php">Interaksi Obat</a></li>
                    
                    <li><a href="index.php" class="tbl-biru">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contentBox">
        </div>
    </nav>
    
    <!-- form -->

    <div class="card row justify-content-md-center " style="width: 90rem;">
        <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Bahan Obat</h1>
                </div>
            <div class="col">
                
                <form action="" method="post">
                    <div class="input-group mt-3">
                        <input type="text" name="keyword" class="form-control" value="<?=$_POST['keyword']?> " placeholder="Masukan bahan obat " >
                        <div class="input-group-append">
                            <button type="submit" name="cari" class="btn btn-secondary pl-4 pr-4">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

            

        <table class="table table-bordered table-hover mt-5 " style="ml :10px">
            <thead class="text-center justify-content-center" style="background-color:#cccccc;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama resmi</th>
                    <th scope="col">Nama Lain</th>
                    <th scope="col">Rumus molekul</th>
                    <th scope="col">Rumus struktur</th>
                    <th scope="col">Berat molekul</th>
                    <th scope="col">Kelarutan </th>
                    <th scope="col">Pemerian</th>
                    <th scope="col">Inkompaktibilitas</th>
                    <th scope="col">Penyimpanan</th>
                    <th scope="col">Kegunaan</th>
            
                </tr>
            </thead>
            <tbody>
                <?php

                //fitur search

                if (isset($_POST['cari'])){
                    $keyword = $_POST['keyword'];
                    $query = "SELECT * FROM list_eksipien WHERE Nama_resmi LIKE '%$keyword%' or Nama_lain LIKE '%$keyword%' order by id asc";
                }else{
                    $query = "SELECT * FROM list_eksipien";
                   
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
                
                <td><?php echo $data['Nama_resmi'];?></td>
                <td><?php echo $data['Nama_lain'];?></td>
                <td><?php echo $data['Rumus_molekul'];?></td>
                <td><?php echo $data['Kelarutan'];?></td>
                <td><?php echo $data['Berat_molekul'];?></td>
                <td><?php echo $data['Kelarutan'];?></td>
                <td><?php echo $data['Pemerian'];?></td>
                <td><?php echo $data['Inkompaktibilitas'];?>
                <td><?php echo $data['Penyimpanan'];?></td>
                <td><?php echo $data['Kegunaan'];?></td>
                
                </tr>
                
                
                <?php
                $no++;

                }

                ?>
                
            </tbody>
        </table>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedChecker</title>
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
                    <li><div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="#">
                          <input type="text" class="searching" name="query" placeholder="Search" title="Enter search keyword" >
                          <button type="submit" title="Search">
                            <i class="bi bi-search"><svg class='ddc-icon ddc-icon-search' width='16' height='16' viewBox='0 0 24 24' aria-hidden='true' focusable='false' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M10 2a8 8 0 016.32 12.9l5.6 5.6-1.42 1.41-5.6-5.59A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z' />
                            </svg></i></button>
                          
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
        <h1>Bahan Obat A to Z</h1>
        <p></p>
        
        <div id='search'>
                <form 
                class='form-search form-search-drug noprint ddc-clearfix' 
                method='get' 
                action='' 
                autocomplete='off'
            >
                <div class='ddc-input-group-action'>		
                    <label>
                        <input type='text' id='livesearch-drug' class='livesearch' name='searchterm'
                            value=''
                            placeholder="Ketikkan bahan obat"
                            
                            data-livesearch='obat'
                            data-required='1'
                        >
                    </label>
                    <button class='ddc-btn'>
                        <span class='ddc-sr-only'>Cari</span>
                        <svg class='ddc-icon ddc-icon-search' width='16' height='16' viewBox='0 0 24 24' aria-hidden='true' focusable='false' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M10 2a8 8 0 016.32 12.9l5.6 5.6-1.42 1.41-5.6-5.59A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z' />
                        </svg>
                    </button>
                </div>
                
            </form>
        </div>
        
        <nav class="ddc-paging" aria-label="Drug list navigation by first letter">
            <ul><li><a href='' aria-label='Browse  medications by letter: A'>A</a></li>
                <li><a href='/alpha/b.html' aria-label='Browse medications by letter: B'>B</a></li>
                <li><a href='/alpha/c.html' aria-label='Browse medications by letter: C'>C</a></li>
                <li><a href='/alpha/d.html' aria-label='Browse medications by letter: D'>D</a></li>
                <li><a href='/alpha/e.html' aria-label='Browse medications by letter: E'>E</a></li>
                <li><a href='/alpha/f.html' aria-label='Browse medications by letter: F'>F</a></li>
                <li><a href='/alpha/g.html' aria-label='Browse medications by letter: G'>G</a></li>
                <li><a href='/alpha/h.html' aria-label='Browse medications by letter: H'>H</a></li>
                <li><a href='/alpha/i.html' aria-label='Browse medications by letter: I'>I</a></li>
                <li><a href='/alpha/j.html' aria-label='Browse medications by letter: J'>J</a></li>
                <li><a href='/alpha/k.html' aria-label='Browse medications by letter: K'>K</a></li>
                <li><a href='/alpha/l.html' aria-label='Browse medications by letter: L'>L</a></li>
                <li><a href='/alpha/m.html' aria-label='Browse medications by letter: M'>M</a></li>
                <li><a href='/alpha/n.html' aria-label='Browse medications by letter: N'>N</a></li>
                <li><a href='/alpha/o.html' aria-label='Browse medications by letter: O'>O</a></li>
                <li><a href='/alpha/p.html' aria-label='Browse medications by letter: P'>P</a></li>
                <li><a href='/alpha/q.html' aria-label='Browse medications by letter: Q'>Q</a></li>
                <li><a href='/alpha/r.html' aria-label='Browse medications by letter: R'>R</a></li>
                <li><a href='/alpha/s.html' aria-label='Browse medications by letter: S'>S</a></li>
                <li><a href='/alpha/t.html' aria-label='Browse medications by letter: T'>T</a></li>
                <li><a href='/alpha/u.html' aria-label='Browse medications by letter: U'>U</a></li>
                <li><a href='/alpha/v.html' aria-label='Browse medications by letter: V'>V</a></li>
                <li><a href='/alpha/w.html' aria-label='Browse medications by letter: W'>W</a></li>
                <li><a href='/alpha/x.html' aria-label='Browse medications by letter: X'>X</a></li>
                <li><a href='/alpha/y.html' aria-label='Browse medications by letter: Y'>Y</a></li>
                <li><a href='/alpha/z.html' aria-label='Browse medications by letter: Z'>Z</a></li>	
            </ul>
        </nav>
    </div>
    
</body>
</html> -->