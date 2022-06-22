<?php
include("koneksi.php");
session_start();

if (empty($_SESSION['orderan']) OR !isset($_SESSION['orderan'])) {
	echo "<script> alert('Belum ada yang order'); document.location.href='menu-makanan.php'</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Orderan</title>
	<style type="text/css">
		body{
			background: url(gambar/mk0.png);
			background-size: cover;
			margin: 0;
			padding: 0;
		}
		header{
			background: tomato;
			height: 100px;
		}
		h1{
			margin: 0;
			color: white;
			font-family: Agency FB;
			font-size: 65px;
			padding: 10px 20px 20px 50px;
		}
		.bungkus{
			margin-top: 20px;
			margin-left: 300px;
			width: 100%;
		}
		.nav a{
			background: orange;
			padding: 5px 10px;
			color: white;
			text-decoration: none;
			font-family: sans-serif;
			font-size: 18px;
			border: 2px solid white;
		}
		table{
			margin-top: 10px;
			font-family: sans-serif;
			background: rgba(0,0,0,0.5);
			width: 50%;
			text-align: center;
		}
		table th{
			background: #e8e27d;
			height: 25px;
		}
		table td{
			background: #e8bb7c;
		}
		a{
			color: red;
			font-weight: bold;
			text-decoration: none;
		}
		.box{
			margin-top: 10px;
			background: #e8e27d;
			width: 280px;
			padding: 20px;
			border: 3px dashed white;
		}
		input[type="text"], input[type="email"]{
			border: none;
			font-family: sans-serif;
			margin-bottom: 5px;
			margin-left: 20px;
			background: #e8e27d
		}
		label{
			font-family: sans-serif;

		}
	</style>
</head>
<body>

<header>
	<h1>Orderan</h1>
</header>

<div class="bungkus">
<div class="nav">
	<a href="menu-makanan.php">Menu makanan</a>
	<a href="menu-minuman.php">Menu minuman</a>
</div>
<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Makanan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Total</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$nomor = 1;
			$totalorder = 0;
		?>
		<?php foreach($_SESSION['orderan'] as $id_makan => $jumlah): ?>
		<?php
			$ambil = $konek->query("SELECT * FROM menu WHERE id='$id_makan'");
			$pecah = $ambil->fetch_assoc();
			$_SESSION['makan'] = $pecah;
			$total = $pecah['harga']*$jumlah;
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
			<td><?php echo $jumlah; ?></td>
			<td>Rp. <?php echo number_format($total); ?></td>
			<td bgcolor="#93baf9">
				<a href="hapus-order.php?id=<?php echo $id_makan ?>">Hapus</a>
			</td>
		</tr>
	<?php
		$nomor++;
		$totalorder+=$total;
		$_SESSION['total'] = $totalorder;
	?>
	<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<th  colspan="5">Total Orderan</th>
			<th>Rp. <?php echo number_format($totalorder) ?></th>
		</tr>
	</tfoot>
</table>
<div class="box">
<form action="nota.php" method="post">
	<label>Nama :</label>
	<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['nama'] ?>"><br>
	<label>E-mail :</label>
	<input type="email" readonly value="<?php echo $_SESSION['pelanggan']['email'] ?>"><br>
	<label>Alamat :</label>
	<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['alamat'] ?>">
	<input type="submit" name="cetak" value="Cetak Nota">
</form>
</div>
</div>

</body>
</html>