<?php
session_start();

// menghubungkan dengan koneksi
include 'function.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style1.css" />

    <link rel="icon" type="img/png" href="img/fyi_logotitle.png" />
    <title img src="img/fyi_logotitle.png">Fyi_Tech</title>
</head>
<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="img/fyi_logo1.png" alt="FYI_TECH" width= "150px"></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari Produk" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
      <button type="button" class="btn btn-light" href="login.php"><a href="login.php">Login</a></button>
    </form>
  </nav>

    <nav class="navbar1">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="daftarP.php">Daftar Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="tipsdantrik.php">Tips dan Trik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="forumdiskusi.php">Forum Diskusi</a>
                </li>
            </ul>
        </div>
    </nav>
    </div>

    
    

    <div class="container">
        <nav class="navbar navbar-light bg-white">
            <span class="navbar-brand mb-0 h1">Daftar Laptop</span>
            <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Kategori" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
            </form>
        </nav>
    </div>

    <div class="container border">
        
        
        <div class=row style:"padding:90px">
            <?php 
                include 'function.php';
                
		        $data = mysqli_query($function,"SELECT * FROM produk");
		        while($d = mysqli_fetch_array($data)){
		            ?>
            <div class="card col-lg-3" >
                
                <img src="<?php echo $d['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href=""></a></h5>
                    
                </div>
                

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $d['nama']; ?></li>
                    <li class="list-group-item">CPU   : <?php echo $d['cpu']; ?></li>
                    <li class="list-group-item">VGA   : <?php echo $d['vga']; ?></li> 
                    <li class="list-group-item">RAM : <?php echo $d['ram']; ?></li>
                    <li class="list-group-item">LAYAR : <?php echo $d['layar']; ?></li>
                </ul>
                
			        
			        
                <div class="card-body">
                <ul><li class="list-group-item" style="background-colour:red" >Rp. <?php echo $d['harga']; ?></li></ul>
                   
                </div>
            </div>

            
                <?php 
		    }
		    ?>
        
         </div>

	   
  </div>
    </div>

    

        
</body>
</html>