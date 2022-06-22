<?php

	include("../koneksi.php");

	if (isset($_POST['daftar'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$alamat = $_POST['alamat'];

		$sql = "UPDATE user SET nama='$nama', email='$email', username='$username', pass='$pass', alamat='$alamat' WHERE id=$id";
		$query = mysqli_query($konek, $sql);

		if ($query) {
			echo "<script> alert('Data Berhasil di Edit'); document.location.href='../admin.php'</script>";
		}
		else {
			echo "<script> alert('Data Gagal di Edit'); document.location.href='../admin.php'</script>";
		}
	}
	else {
		die("Akses Dilarang...!");
	}

?>