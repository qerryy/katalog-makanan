<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="swiper.min.css">
</head>
<style type="text/css">
	body {
      background-image: url(gambar/bg0.jpg);
      font-family: agency fb;
      font-size: 25px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 130px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 450px;
      background: orange;
      border: 3px solid white;
      border-radius: 8px;
    }
    .swiper-slide .details{
    	box-sizing: border-box;
    	padding: 6px;
    }
    .swiper-slide .details h3{
    	margin: 0;
    	padding: 0;
    	font-size: 25px;
    	text-align: center;
    	color: white;
    }
    .swiper-slide .details h3 span{
    	font-size: 18px;
    	color: white;
    }
    img{
    	height: 270px;
    	width: 300px;
    	border-radius: 8px;
    }

</style>
<body>
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<div class="imgBx">
      		<img src="gambar/resto.jpg">
      	</div>
      	<div class="details">
      		<h3><br><br>Happy Food Resto<br><span></span></h3>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div>
      		<img src="gambar/IMG_0826.jpg">
      	</div>
      	<div class="details">
      		<h3><u>Wendy kurniati</u><br><span>Sebagai : Project Manager<br></span><span>Alamat : Pramuka<br></span><span>email:Wendy.kurniati03@gmail.com</span><br><span>No Hp:081347809737</span></h3>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div>
      		<img src="gambar/IMG_3938.jpg">
      	</div>
      	<div class="details">
      		<h3><u>Frederika Hs</u><br><span>Sebagai : Analisis system<br></span><span>Alamat : Pramuka<br></span><span>E-mail : frederikanelle13@gmail.com</span><br><span>No Hp:081354163397</span></h3>     	
      	</div>
      </div>
      <div class="swiper-slide">
      	<div>
      		<img src="gambar/IMG_3941.jpg">
      	</div>
      	<div class="details">
      		<h3><u>Gidion Lempas</u><br><span>Sebagai : Front end<br></span><span>Alamat : Suwandi<br></span><span>E-mail : gidionlempas@gmail.com</span><br><span>No Hp:082255588669</span></h3>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div>
      		<img src="gambar/IMG_3942.jpg">
      	</div>
      	<div class="details">
      		<h3><u>Gerry</u><br><span>Sebagai : Back end<br></span><span>Alamat : Perjuang 9<br></span><span>E-mail : gerryja28@gmail.com</span><br><span>No Hp:085393580903</span></h3>
      	</div>
      </div>
    </div>

    
    <div class="swiper-pagination"></div>
  </div>
<script type="text/javascript" src="swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 40,
        stretch: 0,
        depth: 300,
        modifier: 3,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>
</html>