<?php
include("koneksi.php");

	$username_190029 = $_POST['username_190029'];
	$password_190029 = $_POST['password_190029'];
	
	if($username_190029 !=  null && $password_190029 != null) {
		$login_data = mysqli_query($connect, "select * from users_190029 where username_190029 = '$username_190029'");
		$cek_data = mysqli_num_rows($login_data);
		if($cek_data > 0) {
			$data = mysqli_fetch_array($login_data);
			if($password_190029 == $data['password_190029']) {
				$_SESSION['fullname_190029'] = $data['fullname_190029'];
				$_SESSION['username_190029'] = $data['username_190029'];
				$_SESSION['status'] = true;
				$_SESSION['error'] = "";
				header('location: index.php');
			}else{
				$_SESSION['error'] = "Password Tidak Sesuai...! ";
				header('location: form_login_190029.php');
			}
		}else{
			$_SESSION['error'] = "Username Tidak Sesuai...! ";
			header('location: form_login_190029.php');
		}
	}else{
		$_SESSION['error'] = "Username dan Password Tidak Boleh Kosong...! ";
		header('location: form_login_190029.php');
	}
?>
