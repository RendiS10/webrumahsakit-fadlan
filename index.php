<?php
    require "koneksi.php";  

    $query          = mysqli_query($koneksi, "SELECT * FROM dokter ");
?>

<html>
    <head>
        <title>dokter</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <h1 > Dokter </h1>

        <a href="tambah.php"> data dokter </a>
        <P></P>
        <table border="1"> 
            <tr>
                <td>no</td>
                <td>id_dokter</td>
                <td>nama_dokter</td>
                <td>alamat_dokter</td>
                <td>spesialis_dokter</td>
            </tr>
            <?php $no = 1; ?>
            <?php while ($ambilData = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++; ?></td>    
                <td><?= $ambilData['id_dokter']; ?></td>    
                <td><?= $ambilData['nama_dokter']; ?></td>    
                <td><?= $ambilData['alamat_dokter']; ?></td>    
                <td><?= $ambilData['spesialis_dokter']; ?></td>    
                <td>
                        <a href="edit.php?id=<?= $ambilData['id_dokter'] ; ?>"> edit </a> | 
                        <a href="hapus.php?id=<?= $ambilData['id_dokter'] ; ?>"> hapus </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        
    </body>
</html>