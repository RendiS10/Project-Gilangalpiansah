<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM datamasyarakat WHERE NIK = '$id'");

header("location:index.php");

?>