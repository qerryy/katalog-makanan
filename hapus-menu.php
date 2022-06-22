<?php

	include("koneksi.php");

	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$sql = "DELETE FROM menu WHERE id=$id";
		$query = mysqli_query($konek, $sql);

		if ($query) {
			echo "<script> alert('Data Berhasil Dihapus'); document.location.href='admin-menu.php'</script>";
		}
		else {
			echo "<script> alert('Gagal Menghapus...!'); document.location.href='admin-menu.php'</script>";
		}
	}
	else {
		die("Akses Dilarang...!");
	}