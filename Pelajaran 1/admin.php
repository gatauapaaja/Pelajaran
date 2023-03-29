<?php 

	if( !isset($_GET["Judul"]) || 
		!isset($_GET["Sutradara"]) || 
		!isset($_GET["Pemeran"]) ||
		!isset($_GET["Rating"]) ||
		!isset($_GET['Tahun_Rilis'])
	){

		header("Location: index4.php");
		exit;
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
		img {
			width: 50px;
			height: 50px;
		}
	</style>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET["Logo"]  ?>"></li>
		<li><?= $_GET["Judul"]  ?></li>
		<li><?= $_GET["Sutradara"]  ?></li>
		<li><?= $_GET["Pemeran"]  ?></li>
		<li><?= $_GET["Rating"]  ?></li>
		<li><?= $_GET["Tahun_Rilis"]  ?></li>
	</ul>

	<a href="index4.php">Balik dong</a>
</body>
</html>