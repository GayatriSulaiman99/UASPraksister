<?php
	include 'koneksi.php';
?>
<html>
	<head>
		<title>HOME</title>
	</head>
	<body>
		<center>
			<h1>Selamat Datang diaplikasi Koleksiku</h1>
			<br>
			<?php if($_SESSION != null && isset($_SESSION['status'])) { ?>
				<a href="list_buku_190029.php">Management Buku</a>
				&nbsp;&nbsp;&nbsp;
				<a href="prosesLogout_190029.php">Logout</a>
			<?php } else { ?>
				&nbsp;&nbsp;&nbsp;
				<a href="form_login_190029.php">Login</a>
			<?php } ?>
		</center>
	</body>
</html>