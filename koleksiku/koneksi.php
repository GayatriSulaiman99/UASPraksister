<?php
$connect = mysqli_connect("localhost", "root", "", "koleksiku");
if($connect){
		//echo "koneksi berhasil";
	}else{
		echo "Koneksi gagal !";
	}
	
	session_start();