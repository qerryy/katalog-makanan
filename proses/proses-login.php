<?php

	session_start();
	include("../koneksi.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysqli_query($konek, "SELECT * FROM user WHERE username='$username' AND pass='$password'");
	$cek = mysqli_num_rows($sql);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($sql);
		
		if ($data['hak']=="admin") {
			$_SESSION['username'] = $username;
			$_SESSION['hak'] = "admin";
			$_SESSION['pelanggan'] = $data;
			echo "<script> alert('Selamat datang admin'); document.location.href='../admin.php'</script>";
		}
		else if($data['hak']=="user") {
			$_SESSION['username'] = $username;
			$_SESSION['hak'] = "user";
			$_SESSION['pelanggan'] = $data;
			echo "<script> alert('Selamat datang'); document.location.href='../index.php'</script>";
		}
		else {
			echo "<script> alert('Username atau password anda salah'); document.location.href='../login.php'</script>";
		}
	}
	else {
		echo "<script> alert('Anda belum terdaftar'); document.location.href='../register.php'</script>";
	}

?>