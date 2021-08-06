<?php
	include 'koneksi.php';
	if(!isset($_SESSION['status'])) {
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widht=widht-device-widht, initial-scale=1.0">
	<title>BUKU</title>
</head>
<h2>FORM BUKU</h2>
<hr>
<body>
	<form action="prosesSimpan_190019.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul_190019" id=""></td>
			</tr>
			<tr>
				<td>Penulis Buku</td>
				<td><input type="text" name="penulis_190019"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="radio" name="penerbit_190019" value="Gramedia">Gramedia
				<input type="radio" name="penerbit_190019" value="Informatika">Informatika</td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="tahun_terbit_190019"></td>
			</tr>
			<tr>
				<td>Upload Cover</td>
				<td><input type="file" name="cover"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save"><input type="button" value="Cancel" onclick="history.back();"></td>
			</tr>
		</table>
	</form>
</body>
</html>