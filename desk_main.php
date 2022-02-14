<!doctype html>
<?php
	session_start();
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<!--<link rel="stylesheet" href="/resources/demos/style.css">-->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
	.ogolosh{
		float: left;
		padding:1%;
		text-align: center;
	}
	img{
		width: 100%;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="nav">
			<div class="categories">Категорії</div>
			<div class="place">Місто</div>
			<div class="create"></div>
			<div class="user"><?php print_r($_SESSION["username"]); ?></div>
		</div>
		<div class="header">
			<div class=""></div>
		</div>
		<div class="main">
			<div class="block_ogoloshen col-lg-12">
				<div class="ogolosh1 ogolosh col-lg-3">
					<img src="https://images.wallpaperscraft.ru/image/single/kub_temnyj_tekstura_formy_119956_320x240.jpg"/>
					<div class="ogol_label">Оголошення 1</div>
				</div>
				<div class="ogolosh2 ogolosh col-lg-3">
					<img src="https://images.wallpaperscraft.ru/image/single/siluet_krug_svechenie_141558_320x240.jpg"/>
					<div class="ogol_label">Оголошення 2</div>
				</div>
				<div class="ogolosh3 ogolosh col-lg-3">
					<img src="https://images.wallpaperscraft.ru/image/single/portal_svechenie_iarkij_148108_320x240.jpg"/>
					<div class="ogol_label">Оголошення 3</div>
				</div>
				<div class="ogolosh4 ogolosh col-lg-3">
					<img src="https://images.wallpaperscraft.ru/image/single/roza_kamni_oskolki_139704_320x240.jpg"/>
					<div class="ogol_label">Оголошення 4</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>