<?php
	
	include("../koneksi.php");

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat = $_POST['alamat'];

	$cek = mysqli_query($konek, "SELECT * FROM user WHERE nama = '$nama'");

	if (mysqli_num_rows($cek) <> 0) {
		echo "<script> alert('Nama Sudah Terdaftar'); document.location.href='../register.php'</script>";
	} 
	else {

	$sql = mysqli_query($konek,"INSERT INTO user (nama, email, username, pass, alamat) VALUES ('$nama','$email','$username','$password', '$alamat')");

			if ($sql) {
				echo "<script> alert('Register Berhasil'); document.location.href='../login.php'</script>";
			}
			else {
				echo "<script> alert('Register Gagal'); document.location.href='../register.php'</script>";
			}
	}

?>