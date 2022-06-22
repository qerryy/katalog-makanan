<?php 
 require_once("koneksi.php");
 session_start();

 if (empty($_SESSION['username'])) {
 	 header("location: login.php");
 }
 else if($_SESSION['hak']=='admin'){

 }
 else if($_SESSION['hak']=='user'){
	header("location: login.php");
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/admin-menu.css"> -->
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
			color: white;
			font-size: 50px;
		}
		p{
			background: rgba(0,0,0,.5);
			width: 160px;
			height: 20px;
			text-align: center;
			margin-top: 70px;
			margin-left: 100px;
			margin-bottom: 0;
			padding: 5px;
		}
		table{
			border: none;
			width: 85%;
			color: white;
			background: rgba(0,0,0,.5);
		}
		table thead{
			background: rgba(225,60,64,.5);
		}
		table th{
			height: 30px;
		}
		table tbody{
			background: rgba(255,220,0,.6);
		}
		table tbody td{
			height: 30px;
			text-align: center;
		}
		table tfoot td{
			background: rgba(0,0,0,.5);
			height: 30px;
		}
		a{
			color: white;
		}
		nav{
			background: #ffb630;
			padding: 18px;
		}
		.nav{
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
			margin-left: 680px;
			font-family: sans-serif;
			font-size: 20px;
			border: 2px dashed white;
			padding: 5px;
			transition: 1s;
		}
		.nav:hover{
			background: mediumseagreen;
			border: 2px solid white;
		}
		#log:hover{
			background: red;
			border: 2px solid white;
		}
	</style>
</head>
<body>

	<header>
	<h1>Halaman Admin</h1>
	</header>
	
	<nav>
 	<a href="admin-user.php" class="nav">Daftar User</a>
	<a href="admin-minuman.php" class="nav">Daftar Minuman</a>
	<a href="logout.php" id="log">Logout</a>
	</nav>
	
	<p><a href="tambah-menu.php">[+] Tambah Data Baru</a></p>
	<table align="center">
			
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Deskripsi</th>
                <th>Jenis</th>
                <th>Foto</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT *FROM menu";
				$hasil = mysqli_query($konek, $sql);
                $nomor=1;
				while($data = mysqli_fetch_array($hasil)) { ?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td>Rp. <?php echo number_format($data['harga']); ?></td>
					<td><?php echo $data['deskripsi']; ?></td>
                    <td><?php echo $data['jenis']; ?></td>
                    <td><img src="foto-menu/<?php echo $data['foto']; ?>" width="100"></td>
					<td>
						<a href="edit-menu.php?id=<?php echo $data['id']; ?>">Edit</a> | 
						<a href="hapus-menu.php?id=<?php echo $data['id']; ?>">Hapus</a>
					</td>
                    </tr>
                <?php $nomor++; } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="7">&nbsp;&nbsp;Total : <?php echo mysqli_num_rows($hasil); ?></td>
			</tr>
		</tfoot>
	</table>

</body>
</html>
