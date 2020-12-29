<?php
session_start();

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

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->


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
                    <a class="nav-link" href="index.php">Branda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="daftarP.php">Daftar Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="tipsdantrik.php">Tips dan Trik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="tentang.php">Tentang</a>
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

    
    <div class="jumbotron bg-white">
        <div class="container border">
            <div class="row">
                
                <div class="col-lg-6">
                    <h2 class="display-4"><img src="img/fyi_logo1.png" alt="FYI_TECH" width= "250px"></h2>
                    <p class="lead">Memberikan informasi tentang ulasan laptop, harga laptop terbaruspesifikasi laptop berita tentang teknologi dan tips juga trik seputar laptop.</p>
                    
                </div>
                <div class="col-lg-6">
                <img src="img/iklan.png" alt="FYI_TECH" width= "100%">
                </div>
                
            </div>           
        </div>
    </div>

    <div class="container border">
        <nav class="navbar nav justify-content-center">
            <span class="navbar-brand mb-0 h1">Brand</span>
        </nav>
	    <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2"><img src="img/brand/asus.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/brand.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/acer.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/lenovo.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"></div>    
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2"><img src="img/brand/dell.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/hp.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/rog.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/sony.jpg" alt="FYI_TECH" width= "100%"></div>           
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>   
            <div class="col-lg-2"><img src="img/brand/msi.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/mi.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/toshiba.jpg" alt="FYI_TECH" width= "100%"></div>
            <div class="col-lg-2"><img src="img/brand/huawei.jpg" alt="FYI_TECH" width= "100%"></div>           
            <div class="col-lg-2"></div>
        </div>
    </div>
        
</body>
</html>