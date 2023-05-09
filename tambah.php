<?php

    require "koneksi.php";

?>

<html>
    <head>
        <title>tambah data dokter</title>
    </head>

    <body>
        <h1>Tambah data dokter</h1>

        <form method="post" action="tambahAksi.php">
        <table>
			<tr>
				<td>id_dokter</td>
				<td><input type="number" name="id_dokter"></td>
			</tr>
			<tr>
				<td>Nama dokter</td>
				<td><input type="text" name="nama_dokter"></td>
			</tr>
            <tr>
				<td>Alamat Dokter</td>
				<td><input type="text" name="alamat_dokter"></td>
			</tr>
            <tr>
				<td>spesialis dokter</td>
				<td><input type="text" name="spesialis_dokter"></td>
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
        </form>
    </body>
</html>