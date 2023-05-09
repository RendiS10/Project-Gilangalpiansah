<?php

require "koneksi.php";

$nama_lengkap = $_POST['nama_lengkap'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_kk = $_POST['no_kk'];

$sql = mysqli_query($koneksi, "UPDATE datamasyarakat SET 
                                Nama_Lengkap = '$nama_lengkap',
                                NIK = '$nik',
                                Jenis_Kelamin = '$jenis_kelamin',
                                Nomor_KK = '$no_kk' 
                                WHERE NIK = '$nik' ");

header("location:index.php");

?>