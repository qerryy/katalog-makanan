<?php

	include("koneksi.php");

	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$sql = "DELETE FROM nota WHERE id=$id";
		$query = mysqli_query($konek, $sql);

		if ($query) {
			echo "<script>document.location.href='logout.php'</script>";
		}
		else {
			echo "<script>document.location.href='logout.php'</script>";
		}
	}
	else {
		die("Akses Dilarang...!");
	}