<?php

	include("koneksi.php");

	if (!isset($_GET['id'])) {
		echo "<script> alert('Data tidak ada'); document.location.href='admin-user.php'</script>";
	}

	$id = $_GET['id'];

	$sql = "SELECT * FROM user WHERE id=$id";
	$query = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($query);

	if (mysqli_num_rows($query) < 1) {
		echo "<script> alert('Tidak Ada Data yang diedit'); document.location.href='admin-user.php'</script>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

	<div class="box">
		<div class="right"></div>
		<div class="left">
			<div class="formbox">

				<form action="proses/proses-edit-user.php" method="post">
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">

					<label>Nama</label>
					<input type="text" name="nama" placeholder="Name" required="" value="<?php echo $data['nama'] ?>">

					<label>Username</label>
					<input type="text" name="username" placeholder="Username" required="" value="<?php echo $data['username'] ?>">

					<label>E-mail</label>
					<input type="email" name="email" placeholder="E-mail" required="" value="<?php echo $data['email'] ?>">

					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required="" value="<?php echo $data['pass'] ?>">

					<label>Alamat</label>
					<textarea placeholder="Alamat" name="alamat"><?php echo $data['alamat'] ?></textarea>

					<input type="submit" name="daftar" value="Create">
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>