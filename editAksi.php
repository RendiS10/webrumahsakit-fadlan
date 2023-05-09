<?php

require "koneksi.php";

// ambil name dari file tambah data
$id_dokter        		   = $_POST['id'];
$nama_dokter               = $_POST['nama_dokter'];
$alamat_dokter   		   = $_POST['alamat_dokter'];
$spesialis_dokter          = $_POST['spesialis_dokter'];

// input data siswa
$input = mysqli_query($koneksi, "UPDATE dokter SET 
                                id_dokter = '$id_dokter',
                                nama_dokter = '$nama_dokter',
                                alamat_dokter = '$alamat_dokter',
                                spesialis_dokter = '$spesialis_dokter'
                                WHERE id_dokter = '$id_dokter'");

header("location:index.php");
?>