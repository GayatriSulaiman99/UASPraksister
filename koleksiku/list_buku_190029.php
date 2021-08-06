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
<h2>LIST BUKU</h2>
<a href="form_buku_190029.php">Tambah Buku</a>
<hr>
<body>
		<table border="1">
			<tr>
				<th>NO</th>
				<th>Judul Buku</th>
				<th>Penulis Buku</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>Cover</th>
				<th colspan="2">Aksi</th>
			</tr>
			<?php
			$query = mysqli_query($connect, "SELECT * FROM buku_190029");
			$no = 1;
			while($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $data['judul_190029']?></td>
				<td><?= $data['penulis_190029']?></td>
				<td><?= $data['penerbit_190029']?></td>
				<td><?= $data['tahun_terbit_190029']?></td>
				<td><img src="<?= ($data['cover'] == null ? 'https://www.viainternet.com.mx/wp-content/themes/arkahost/assets/images/default.jpg' :  $data['cover']) ?>" width="100" height="100"></td>
				<td><a href="form_edit_190029.php?id_buku=<?=$data['id_buku_190029']?>">Edit</td>
				<td><a href="hapus_190029.php?id_buku=<?=$data['id_buku_190029']?>">Hapus</td>
			</tr>
			<?php
			}
			?>
		</table>
	</form>
</body>
</html>