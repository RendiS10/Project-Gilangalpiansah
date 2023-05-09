<?php
require "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM datamasyarakat WHERE NIK = '$id'");

$ambil = mysqli_fetch_array($query);


?>
<html>
    <head>
        <title>Edit Data Masyarakat</title>
    </head>
    <body>
        <h1>edit data Masyarakat</h1>
        <form action="editAksi.php" method="post">
        <input type="hidden" name="id" value="<?= $ambil['NIK'] ?>">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value="<?= $ambil['Nama_Lengkap']; ?>"></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" value="<?= $ambil['NIK']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?= $ambil['Jenis_Kelamin']; ?>"></td>
            </tr>
            <tr>
                <td>No KK</td>
                <td><input type="text" name="no_kk" value="<?= $ambil['Nomor_KK']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
        </form>
    </body>
</html>