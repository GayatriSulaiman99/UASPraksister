<?php
	include 'koneksi.php';
?>
<html>
	<head>
		<title>Form Login</title>
	</head>
	<body>
		<h2>Form Login</h2>
		<form action="prosesLogin_190029.php" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username_190029"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password_190029"></td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit">Login</button>
					</td>
				</tr>
				<tr>
					<td colspan="">
						<h4 style="color : red">
							<?= ($_SESSION != null ? $_SESSION['error'] : "") ?>
						</h4>
					</td>
				</tr>
			</table>		
		</form>			
	</body>
</html>