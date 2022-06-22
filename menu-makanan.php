<?php 
	include("koneksi.php");
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu Makanan</title>
	<style type="text/css">
		body{
		    margin: 0;
		    padding: 0;
		    background-image: url(gambar/bg0.jpg);
		    background-size: cover;
		}
		.card{
		    float: left;
		    margin-top: 30px;
		    margin-left: 32px;
		    width: 280px;
		    height: 280px;
		    background: #000;
		    overflow: hidden;
		    box-shadow: 0 5px 10px rgba(0,0,0,0.9);
		    border-radius: 5px;
		    border: 2px dashed white;
		}
		.card .poster{
		    position: relative;
		    overflow: hidden;
		}
		.card .poster:before{
		    content: '';
		    position: absolute;
		    bottom: -145px;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    background: linear-gradient(0deg, #000 60%, transparent);
		    transition: 0.5s;
		    z-index: 1;
		}
		.card:hover .poster:before{ bottom: 0; }
		.card .poster img{
		    width: 300px;
		    height: 280px;
		    transition: 0.5s;
		}
		.card:hover .poster img{ filter: blur(2px); }
		.details{
		    position: absolute;
		    padding: 20px;
		    width: 100%;
		    height: 80%;
		    bottom: -120px;
		    left: 0;
		    box-sizing: border-box;
		    transition: 0.5s;
		    z-index: 2;	
		}
		.card:hover .details{ bottom: 0;* }
		.details h2{
		    color: #fff;
		    margin: 0;
		    padding: 0;
		    font-size: 20px;
		}
		.details h2 span{
		    font-size: 14px;
		    color: #ff9800;
		}
		.tags{
		    position: relative;
		    margin-top: 5px;
		}
		.tags span{
		    padding: 2px 5px;
		    margin-right: 2px;
		    color: #fff;
		    display: inline-block;
		    border-radius: 4px;
		}
		.tags span.fantasy{ background: tomato; }
		.tags span{ background: #f70661; }
		.info{ color: #fff; }
		.info p{ margin: 20px 0 10px; }
		table{ clear: both; width: 40%;}
		.tabheader{
			width: 100%;
			font-family: Agency FB;
			font-size: 50px;
			font-weight: bold;
			background: orange;
			color: white;
		}
		.td{
			font-family: Agency FB;
			font-size: 35px;
			font-weight: bold;
			background: tomato;
			border-radius: 8px;
			border: 4px solid white;
			transition: 1s;
		}
		a{
			color: white;
			text-decoration: none; }
		.td:hover{
			border: 4px dashed white;
			background: orange;
		}
	</style>
</head>
<body>
	<?php
		$sql1 = "SELECT * FROM user"; 
		$hasil1 = mysqli_query($konek, $sql1);
	?>
	<table align="center" class="tabheader">
		<tr>
			<td height="70" width="800" align="center">Menu Makanan</td>
			<?php if(isset($_SESSION['pelanggan'])): ?>
			<td width="300" align="center">| User : [<?php echo $_SESSION['username']; ?>]</td>
			<td width="200" align="center"><a href="index.php">Home</a></td>
			<?php endif ?>
		</tr>
	</table>
		<?php
			$sql = "SELECT * FROM menu";
			$hasil = mysqli_query($konek, $sql);
			while($data = mysqli_fetch_array($hasil)) {
		?>
	<div class="card">
		<div class="poster">
			<img src="foto-menu/<?php echo $data['foto']; ?>">
			<div class="details">
				<h2><?php echo $data['nama']; ?><br><span>Directed by Happy Food</span><span> | Rp. <?php echo number_format($data['harga']); ?></span></h2>
				<div class="tags">
				<span class="fantasy"><a href="order.php?id=<?php echo $data['id']; ?>">Order</a></span>
			</div>
			<div class="info">
				<p>
					<?php echo $data['deskripsi']; ?>
				</p>
			</div>
			</div>
		</div>
	</div>
	<?php } ?>

	<table align="center">
		<tr>
			<td height="80"></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td height="45" width="100" align="center" class="td">
			<a href="menu-minuman.php">Menu Minuman</a>
			</td>
			<td width="10"></td>
			<td height="45" width="100" align="center" class="td">
			<a href="beli.php">Lihat Orderan</a>
			</td>
		</tr>
		<tr>
			<td height="80"></td>
			<td></td>
			<td></td>
		</tr>
	</table>

</body>
</html>