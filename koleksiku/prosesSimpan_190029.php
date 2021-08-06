<?php
	include 'koneksi.php';
	if(!isset($_SESSION['status'])) {
		header('location: index.php');
	}

$judul_190029 = $_POST['judul_190029'];
$penulis_190029 = $_POST['penulis_190029'];
$penerbit_190029 = $_POST['penerbit_190029'];
$tahun_terbit_190029 = $_POST['tahun_terbit_190029'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["cover"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$error_text = "Gambar yang diupload bermasalah";
$_SESSION['error'] = null;

if (file_exists($target_file)) {
	$_SESSION['error'] = $error_text;
}

if ($_FILES["cover"]["size"] > 5000000) {
	$_SESSION['error'] = $error_text;
}

if(imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
	$_SESSION['error'] = $error_text;
}

if($_SESSION['error'] == null) {
	move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file);	
	$query = mysqli_query($connect, "INSERT INTO buku_190029(judul_190029, penulis_190029, penerbit_190029, tahun_terbit_190029, cover)
	VALUES('$judul_190029', '$penulis_190029', '$penerbit_190029', '$tahun_terbit_190029', '$target_file')");

	if($query){
		echo 'Data Tersimpan';
	}else{
		echo 'Data gagal disimpan';
	}
	header("location: list_buku_190029.php");
}else{
	header("location: form_buku_190029.php");
}
?>