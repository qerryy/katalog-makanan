<?php

	include("koneksi.php");

	if (!isset($_GET['id'])) {
		echo "<script> alert('Data tidak ada'); document.location.href='admin-minuman.php'</script>";
	}

	$id = $_GET['id'];

	$sql = "SELECT * FROM minuman WHERE id=$id";
	$query = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($query);

	if (mysqli_num_rows($query) < 1) {
		echo "<script> alert('Tidak Ada Menu yang diedit'); document.location.href='admin-minuman.php'</script>";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Menu</title>
	<link rel="stylesheet" type="text/css" href="css/tambah-menu.css">
</head>
<body>

	<div class="box">
		<div class="right"></div>
		<div class="left">
			<div class="formbox">

				<form action="proses/proses-edit-minuman.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">

					<label>Nama</label>
					<input type="text" name="nama" placeholder="Name" required="" value="<?php echo $data['nama'] ?>">

					<label>Harga</label>
					<input type="number" name="harga" placeholder="Harga" required="" value="<?php echo $data['harga'] ?>">

					<label>Deskripsi</label>
					<textarea placeholder="Deskripsi" name="deskripsi" required=""><?php echo $data['deskripsi'] ?></textarea>

					<label>Ganti Foto</label>
					<input type="file" name="foto"><img src="foto-minuman/<?php echo $data['foto']; ?>" width="100">

					<input type="submit" name="simpan" value="Simpan">
				</form>
			</div>
		</div>
	</div>

</body>
</html>