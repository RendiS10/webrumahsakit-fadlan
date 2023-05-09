<?php

    $koneksi = mysqli_connect("localhost", "root", "", "rumah_sakit");

    if(!$koneksi) {
        echo "gagal terhubung ke database". mysqli_connect_error();
    }

    ?>