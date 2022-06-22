<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="box">
		<div class="left"></div>
		<div class="right">
			<div class="formbox">
				<form action="proses/proses-login.php" method="post">

					<label>Username</label>
					<input type="text" name="username" placeholder="Username" required="">

					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required="">

					<input type="submit" name="login" value="Login">
					<p>Don't have account yet? <a href="register.php">Register</a></p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>