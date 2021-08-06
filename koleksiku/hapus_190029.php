<?php
include("koneksi.php");

if(isset($_GET['id_buku_190029'])){
	$id_buku_190029 = $_GET['id_buku_190029'];
	
	$sql = "DELETE FROM buku_190029 WHERE id_buku_190029=$id_buku_190029";
	$query = mysqli_query($connect, $sql);
	
	if($query){
		header('Location: list_buku_190029.php');
	}else{
		die("Gagal Menghapus...!");
	}
}else{
	die("akses dilarang...!");
}
?>