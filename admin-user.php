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
			margin-left: 640px;
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
 	<a href="admin-menu.php" class="nav">Daftar Makanan</a>
	<a href="admin-minuman.php" class="nav">Daftar Minuman</a>
	<a href="logout.php" id="log">Logout</a>
	</nav>

	<p><a href="register.php">[+] Tambah Data Baru</a></p>
	<table align="center">

		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>E-mail</th>
				<th>Username</th>
				<th>Password</th>
				<th>Alamat</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT *FROM user";
				$hasil = mysqli_query($konek, $sql);
 				$nomor=1;
				while($data = mysqli_fetch_array($hasil)) {
					echo "<tr>";
						echo "<td>".$nomor."</td>";
						echo "<td>".$data['nama']."</td>";
						echo "<td>".$data['email']."</td>";
						echo "<td>".$data['username']."</td>";
						echo "<td>".$data['pass']."</td>";
						echo "<td>".$data['alamat']."</td>";

						echo "<td>";
						echo "<a href='edit-user.php?id=".$data['id']."'>Edit</a> | ";
						echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
						echo "</td>";
					echo "</tr>";
					$nomor++;
				}
			?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="7">&nbsp;&nbsp;Total : <?php echo mysqli_num_rows($hasil); ?></td>
			</tr>
		</tfoot>
	</table>

</body>
</html>
