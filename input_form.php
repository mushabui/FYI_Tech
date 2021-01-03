<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'function.php';

// menangkap data yang di kirim dari form
$email = $_POST['email'];
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];
$penilaian_web = $_POST['penilaian_web'];
$penilaian_fitur = $_POST['penilaian_fitur'];
$saran = $_POST['saran'];

// menginput data ke database
mysqli_query($function,"INSERT INTO survey VALUES ('','$email','$nama','$pekerjaan', '$penilaian_web', '$penilaian_fitur', '$saran')");
 
header("location:form.php");
?>