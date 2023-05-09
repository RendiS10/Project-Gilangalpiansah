<?php

require "koneksi.php";

$nama_lengkap = $_POST['nama_lengkap'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_kk = $_POST['no_kk'];

$sql = mysqli_query($koneksi, "INSERT INTO datamasyarakat VALUES ('$nama_lengkap', '$nik', '$jenis_kelamin', '$no_kk' )");

header("location:index.php");

?>