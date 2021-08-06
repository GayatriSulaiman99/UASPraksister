<?php
	include 'koneksi.php';
	if(!isset($_SESSION['status'])) {
		header('location: index.php');
	}

if(isset($_POST['update'])){
	
	$id_buku_190029 = $_POST['id_buku_190029'];
	$judul_190029 = $_POST['judul_190029'];
	$penulis_190029 = $_POST['penulis_190029'];
	$penerbit_190029 = $_POST['penerbit_190029'];
	$tahun_terbit_190029 = $_POST['tahun_terbit_190029'];
	
	$sql = "UPDATE buku_190029 SET judul_190029='$judul_190029', 
	penulis_190029='$penulis_190029', penerbit_190029='$penerbit_190029', 
	tahun_terbit_190029='$tahun_terbit_190029' WHERE id_buku_190029=$id_buku_190029";
	$query = mysqli_query($connect, $sql);
	
	if($query) {
		header('Location: list_buku_190029.php');
	}else{
		die("Gagal Menyimpan Perubahan...");
	}
}else{
	die("akses dilarang...!");
}
?>