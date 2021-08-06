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
<h2>FORM UPDATE BUKU</h2>
<hr>
<body>
	<?php		
		$id_buku_190019 = $_GET['id_buku_190019'];
		
		$sql = "SELECT * FROM buku_190019 WHERE id_buku_190019='$id_buku_190019'";
		$query = mysqli_query($connect, $sql);
		
		if(mysqli_num_rows($query) > 0){
			$data = mysqli_fetch_array($query);
		}
	?>
	
	<form action="prosesEdit_190019.php" method="POST">
		<table>
			<tr>
					<input type="hidden" name="id_buku_190019" value="<?php echo $data['id_buku_190019'];?>">
				<td>Judul Buku</td>
				<td><input type="text" name="judul_190019" id="" value="<?php echo $data['judul_190019'];?>"></td>
			</tr>
			<tr>
				<td>Penulis Buku</td>
				<td><input type="text" name="penulis_190019" value="<?php echo $data['penulis_190019'];?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>
				<?php
				if($data['penerbit_190019'] == "Gramedia"){
					echo "<input type='radio' name='penerbit_190019' value='Gramedia' checked='checked'> Gramedia";
					echo "<input type='radio' name='penerbit_190019' value='Informatika'> Informatika";
				}else{
					echo "<input type='radio' name='penerbit_190019' value='Gramedia'> Gramedia";
					echo "<input type='radio' name='penerbit_190019' value='Informatika' checked='checked'> Informatika";
				}
				?>
				</td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="tahun_terbit_190019" value="<?php echo $data['tahun_terbit_190019'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="update" name="update">
				<a href="list_buku_190019.php"><input type="button" value="Cancel"></td>
			</tr>
		</table>
	</form>
</body>
</html>