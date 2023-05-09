<?php

    require "koneksi.php";
    $id = $_GET["id"];
    $query          = mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter = $id ");

    $ambilData      = mysqli_fetch_assoc($query);
?>

<html>
    <head>
        <title>edit dokter</title>
    </head>

    <body>
        <h1>edit data dokter</h1>
         
        
        <a href="index.php">kembali</a>
        <br>
        <form method="post" action="editAksi.php">
        <input type="hidden" name="id" value="<?= $ambilData['id_dokter']; ?>">
        <table>
            <tr>
                <td>id_dokter</td>
                <td>
                    <input type="number" name="id_dokter" value="<?= $ambilData['id_dokter']; ?>">
                </td>
            </tr>
            <tr>
                <td>nama_dokter</td>
                <td><input type="text" name="nama_dokter" value="<?= $ambilData['nama_dokter']; ?>"></td>
            </tr>
            <tr>
                <td>alamat_dokter</td>
                <td><input type="text" name="alamat_dokter" value="<?= $ambilData['alamat_dokter']; ?>"></td>
            </tr>
            <tr>
                <td>spesialis_dokter</td>
                <td><input type="text" name="spesialis_dokter" value="<?= $ambilData['spesialis_dokter']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="EDIT"></td>
            </tr>       
        </table>
        </form>
    </body>
</html>