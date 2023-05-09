<?php

    $koneksi = mysqli_connect("localhost", "root", "", "datamasyarakat");

    if(!$koneksi){
        echo "belum terkoneksi". mysqli_connect_error();
    }


?>