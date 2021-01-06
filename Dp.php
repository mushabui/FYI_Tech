<!DOCTYPE html>
<html>

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

	<div class="contaner">
		<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="index.php"><img src="img/fyi_logo1.png" alt="FYI_TECH" width= "150px"></a>
		<button type="button" class="btn btn-light" href=""><a href="daftarP.php">Kembali ke daftar produk</a></button>
		</nav>
	</div>

	<div class="container-fluid ">
		<nav class="navbar1 nav justify-content-center">
            <span class="navbar-brand mb-0 h1" style="color:#ffffff;">Detail Produk</span>
        </nav>
	</div>

	<div class="jumbotron bg-white">
        <div class="container border">
            <div class="row">
                <div class="col-lg-6">
					<h2 >ini nama prodaknya man</h2>
					<p>ini tempat harga man</p>

					<div class="row">

						<div class="col-lg-3">							
							<ul class="list-group list-group-flush">
								<li class="list-group-item">CPU</li>
								<li class="list-group-item">RAM</li>
								<li class="list-group-item">VGA</li>
								<li class="list-group-item">Layar</li>
							</ul>
						</div>

						<div class="col-lg-1">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">:</li>
								<li class="list-group-item">:</li>
								<li class="list-group-item">:</li>
								<li class="list-group-item">:</li>
							</ul>
						</div>

						<div class="col-lg-8">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">man taro CPU disini</li>
								<li class="list-group-item">man taro RAM disini</li>
								<li class="list-group-item">man taro VGA disini</li>
								<li class="list-group-item">man taro Layar disini</li>
							</ul>							
						</div>
					</div>
					<p>
					<button class="btn btn-light btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						klik untuk info selengkapnya
					</button>
					</p>

					<div class="collapse" id="collapseExample">
						<div class="card card-body">
						Disini tempat buat penjelasan lengkapnya kalo lo mau tamabahin tarok sini
					</div>						
                </div>

                <div class="col-lg-6">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img src="img/brand/acer.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="img/brand/asus.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<img src="img/brand/lenovo.jpg" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
	
                </div>
            </div>           
        </div>
    </div>
	
</body>
</html>