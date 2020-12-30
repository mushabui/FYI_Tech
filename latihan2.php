<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
	!isset($_GET["cpu"]) || 
	!isset($_GET["vga"]) || 
	!isset($_GET["layar"])) {
	// redirect
	header("Location: daftarP.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>

<ul>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["cpu"]; ?></li>
	<li><?= $_GET["vga"]; ?></li>
	<li><?= $_GET["layar"]; ?></li>
</ul>

<a href="daftarP.php">Kembali ke daftar mahasiswa</a>

</body>
</html>