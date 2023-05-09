<?php 
    require "koneksi.php";

?>

<html>
    <head>
        <title>Data Masyarakat</title>
    </head>
    <body>
        <h1>Data Masyarakat</h1>
        <a href="tambah.php">tambah data Masyarakat</a>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>NIK</td>
                <td>Jenis Kelamin</td>
                <td>NomorKK</td>
            </tr>

            <?php 
            $no  = 1;
            $sql = mysqli_query($koneksi, "SELECT * FROM datamasyarakat");

            while ($ambil = mysqli_fetch_array($sql)) {
                
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $ambil['Nama_Lengkap']; ?></td>
                <td><?= $ambil['NIK']; ?></td>
                <td><?= $ambil['Jenis_Kelamin']; ?></td>
                <td><?= $ambil['Nomor_KK']; ?></td>
                <td>
                    <a href="hapus.php?id=<?= $ambil['NIK']; ?>"> hapus</a>
                    <a href="edit.php?id=<?= $ambil['NIK']; ?>"> edit</a>
                </td>
            </tr >
            <?php } ?>
        </table>
    </body>
</html>