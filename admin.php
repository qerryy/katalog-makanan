<?php
include("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url(gambar/mk0.png);
			background-size: cover;
		}

		header{
			background: #4f4f4f;
			height: 95px;
		}
		h1{
			margin: 0;
			padding: 15px 0px 0px 30px;
			font-family: agency fb;
			color: #ffb630;
			font-size: 50px;
		}
		nav{
			background: #ffb630;
			padding: 18px;
		}
		a{
			color: white;
			text-decoration: none;
			margin-left: 80px;
			font-family: sans-serif;
			font-size: 20px;
			border: 2px dashed white;
			padding: 5px;
			transition: 1s;
		}
		#log{
			color: white;
			text-decoration: none;
			margin-left: 460px;
			font-family: sans-serif;
			font-size: 20px;
			border: 2px dashed white;
			padding: 5px;
			transition: 1s;
		}
		a:hover{
			background: tomato;
			border: 2px solid white;
		}
		#log:hover{
			background: red;
			border: 2px solid white;
		}
	</style>
</head>
<body>
	<?php

		if($_SESSION['hak']==""){
			header("location: login.php");
		}
 	?>

	<header>
	<h1>Halaman Admin</h1>
	</header>

	<nav>
 	<a href="admin-user.php">Daftar User</a>
	<a href="admin-menu.php">Daftar Makanan</a>
	<a href="admin-minuman.php">Daftar Minuman</a>
	<a href="logout.php" id="log">Logout</a>
	</nav>

</body>
</html>