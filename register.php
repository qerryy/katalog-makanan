<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

	<div class="box">
		<div class="right"></div>
		<div class="left">
			<div class="formbox">

				<form action="proses/proses-register.php" method="post">
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Name" required="">

					<label>Username</label>
					<input type="text" name="username" placeholder="Username" required="">

					<label>E-mail</label>
					<input type="email" name="email" placeholder="E-mail" required="">

					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required="">

					<label>Alamat</label>
					<textarea placeholder="Alamat" name="alamat"></textarea>

					<input type="submit" name="daftar" value="Create">
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>