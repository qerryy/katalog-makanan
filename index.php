<?php
	include("koneksi.php");
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background-image: url(gambar/bg0.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	@font-face{
		font-family: web;
		src: url(font/DeValencia.otf);
	}
	@font-face{
		font-family: webe;
		src: url(font/Mona-Free.otf);
	}	
	nav{
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 70px;
		background: rgba(0,0,0,0.6);
		padding: 0 100px;
		box-sizing: border-box;
	}
	nav .brand{
		float: left;
		/*height: 80%;*/
		line-height: 70px;
	}
	
	img{
		width: 70px;
		height: 70px;
	}

	nav ul{
		float: right;
		display: flex;
		margin: 0;
		padding: 0;

	}
	nav ul li{
		list-style: none;
	}
	a{
		font-family: arial;
		text-decoration: none;
		color: white;
	}
	nav ul li a{
		position: relative;
		display: block;
		height: 70px;
		line-height: 70px;
		padding: 0 20px;
		box-sizing: border-box;
		color: #fff;
		text-decoration: none;
		text-transform: uppercase;
		transition: .5s;
	}
	nav ul li a:hover{
		color: #262626;
	}
	nav ul li a:before{
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #fff;
		transform-origin: right;
		z-index: -1;
		transform: scaleX(0);
		transition: transform .5s;
	}
	nav ul li a:hover:before{
		transform-origin: left;
		transform: scaleX(1);
	}
/*------------------------ diatas bagian menu ---------------------------------------------------------*/
	.sec1{
		width: 100%;
		height: 415px;
		box-sizing: border-box;
	}
	.sec2{
		background-color: #fff;
		height: 500px; 
	}
	.sec3{
		padding: 200px;
		background-image: url(gambar/bg3.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	.sec4{
		padding: 50px;
		background-color: #00b386;
		height: 440px;	
	}
	.sec6{
		height: 260px;
		background-color: black	;
	}
	h1{
		margin-top: 250px;
		margin-left: 400px;
		margin-bottom: 0;
		color: white;
		font-family: web;
		font-size: 100px;
	}
	#p{
		margin-top: 10px;
		margin-left: 420px;
		color: white;
		font-family: webe;
		font-size: 30px;
	}
	.order{
		color: black;
		text-align: center;
		font-family: web;
		font-size: 50px;
		margin-top: 0;
		margin-bottom: 0;

	}
	#satu{
		width: 250px;
		height: 250px;
		margin-top: 25px;
		border-radius: 8px;
		margin-left: 120px;
		border:  3px dashed black;

	}
	p{
		margin-left: 100px;
		font-family: verdana;
		color: white;
	}
	
	/*tulisan sec 4*/
	.h1{
		margin-top: 0;
		font-size: 50px;
		padding: 30px;
		margin-left: 480px;
		font-family: web;
		color: #3d5c5c;
	}
	.h3{
		color: white;
		font-family: web;
		text-align: center;
		font-size: 60px;
		margin-top: 0;
		padding: 0;
	}
	.p3{
		margin-left: 320px;
		margin-bottom: 60px;
	}
	#p3{
		border: 10px solid #ff8000;
		border-radius: 5px;
		width: 130px;
		margin-left: 400px;
		background-color: #ff8000;
		font-weight: bold;
	}
	.border{
		border: 5px solid #ff8000;
		border-radius: 5px;
		width: 110px;
		margin-left: 610px;
		margin-top: 0;
		background-color: #ff8000;
		font-weight: bold; 
	}
	.border2{
		margin-top: 0;
		color: black;
	}
	table{
		margin-top: 50px;
	}
	td{
		color: #3d5c5c;
	}
	.imgsec5{
		margin-top: 20px;
		margin-left: 650px;
		width: 50px;
		height: 50px;
	}
	h5{
		margin-left: 550px;
	}
	.h5{
		margin-left: 600px;
	}
	.h5copy{
		margin-left: 610px;
	}
	
</style>
<body>
	<?php
		if($_SESSION['hak']==""){
			echo "<script>document.location.href='login.php'</script>";
		}
		$sql1 = "SELECT * FROM user"; 
		$hasil1 = mysqli_query($konek, $sql1);
 	?>

	<nav>
		<div class="brand">
			<img src="gambar/logo.png">
		</div>
		<ul>
			<li><a href="">HOME</a></li>
			<li><a href="#2">MENU</a></li>
			<li><a href="menu-makanan.php">ORDER</a></li>
			<li><a href="#4">CONTACT</a></li>
			<li><a href="aboutus.php">ABOUT US</a></li>
			<?php if(isset($_SESSION['pelanggan'])): ?>
				<li><a href="logout.php">LOGOUT</a></li>
				<li><a href="#">[<?php echo $_SESSION['username']; ?>]</a></li>
			<?php else: ?>
			<li><a href="login.php">LOGIN</a></li>
			<?php endif ?>
		</ul>
	</nav>

	<section class="sec1"><h1>HAPPY FOOD</h1>
		<p id="p">"This site is the best restaurant site available"</p>
	</section>
	<section class="sec2"><u style="color: #3d5c5c"><h1 class="h1">GUEST REVIEW</h1></u>
	<table align="center">
		<tr>
			<td width="500" align="center"><u style="color: #3d5c5c">FREDERIKA</u></td>
			<td width="500" align="center"><u style="color: #3d5c5c">DARY DARIS</u></td>
			<td width="500" align="center"><u style="color: #3d5c5c">TUYANG G</td>
		</tr>
		<tr>
			<td align="center"><br>this is my first time eating here.<br> I heard from my friends that the food here is delicious,<br> but I did not immediately believe it before I tasted it directly.<br> after I tasted it, it turned out to be truly amazing.<br><br>Aug, 18/09/2017</td>
			<td align="center"><br>my experience of eating here is very satisfying.<br> the menus here will not make you disappointed,<br> why did I say that because it was proven that<br> many people eat here and on average they say <br>the food here is very tasty.<br><br>July, 01/02/2018</td>
			<td align="center"><br>one word for happy food perferct.<br> the service here is very good and also the food here is very delicious.<br> customer cleanliness and comfort are number one in food.<br><br>Aug, 22/05/2014</td>
		</tr>
	</table></section>
<div id="2">
	<section class="sec3"><u style="color: white"><h3 class="h3">READY FOR DINNER ?</h3></u><P class="p3">You Can See The Menu In Here</P>
	<p id="p3" align="center"><a href="menu.php">See The Menu</a></p></section>
</div>
<div id="3">
	<section class="sec4">
	<p class="order"><u>ONLINE ORDERING</u></p>
	<table>
		<tr>
				<td><img src="gambar/3.jpg" id="satu"></td>
			<td><p class="border2" align="center">hungry but lazy to go out? just order here.<br> guaranteed full stomach without the need to leave the house..</p></td>
		</tr>
	</table>
	<p class="border" align="center"><a href="menu-makanan.php">Order here!</a></p></section>
</div>
<div id="4">
	<section class="sec6"><img src="gambar/lokasi1.png" class="imgsec5">
	<h5 style="color: white">Samarinda, Kalimantan Timur, Indonesia</h5>
	<h5 style="color: white" class="h5">Call. (0090) 216 456 2828  <br>Info@happyfood.com/</h5>
	<hr>
	<h5 style="color: white" class="h5copy">&copy HappyFood.2018</h5></section>
</div>	
	
</body>
</html>