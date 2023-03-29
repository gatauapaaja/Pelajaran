<?php 
	
	// $_GET["nama"] = "Irpan Kontol";
	// var_dump($_GET);

	$films = [
		[
			"Logo" => "Panther.jpg",
			"Judul" => "Black Panther", 
			"Sutradara" => "Jhonny Cage", 
			"Pemeran" => "Ratu Ramonda, Dewi Shinta, Chaka", 
			"Rating" => 9, 
			"Tahun_Rilis" => 2022
		],
		[
			"Logo" => "Thor.jpg",
			"Judul" => "Thor", 
			"Sutradara" => "Black Pearl", 
			"Pemeran" => "Korg", 
			"Rating" => 10, 
			"Tahun_Rilis" => 2023
		],
		[
			"Logo" => "Teddy.jpg",
			"Judul" => "Turning Red", 
			"Sutradara" => "Mei Lee", 
			"Pemeran" =>"Nominee", 
			"Rating" => 6, 
			"Tahun_Rilis" => 2021
		],
		[
			"Logo" => "Harry.jpg",
			"Judul" => "Harry Potter", 
			"Sutradara" => "JK Rowling", 
			"Pemeran" => "Christian Buddha", 
			"Rating" => 10, 
			"Tahun_Rilis" => 2011
		],
		[
			"Logo" => "Frozen.jpg",
			"Judul" => "Frozen III", 
			"Sutradara" => "Crock Rawson", 
			"Pemeran" => "Juardado", 
			"Rating" => 5, 
			"Tahun_Rilis" => 2022
		],
		[
			"Logo" => "Call.jpg",
			"Judul" => "Call It Love", 
			"Sutradara" => "Ramones", 
			"Pemeran" => "Chi Huang Do", 
			"Rating" => 4, 
			"Tahun_Rilis" => 1998
		],
		[
			"Logo" => "Pandora.jpg",
			"Judul" => "Pandora", 
			"Sutradara" => "Thamus Tros", 
			"Pemeran" => "Salaman Hong", 
			"Rating" => 6.5, 
			"Tahun_Rilis" => 1995
		],
		[
			"Logo" => "Criminal.jpg",
			"Judul" => "Criminal Case", 
			"Sutradara" => "January Doom", 
			"Pemeran" => "Aisyah", 
			"Rating" => 5.5, 
			"Tahun_Rilis" => 2021
		],
		[
			"Logo" => "Miley.jpg",
			"Judul" => "Miley Cyrus", 
			"Sutradara" => "Justin Bieber", 
			"Pemeran" => "Doominic", 
			"Rating" => 9.8, 
			"Tahun_Rilis" => 2023
		],
		[
			"Logo" => "Basket.jpg",
			"Judul" => "Basket Fun", 
			"Sutradara" => "Zilong", 
			"Pemeran" => "Damasiang", 
			"Rating" => 7.5, 
			"Tahun_Rilis" => 2022
		]
	];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>BELAJAR METHOD GET & POST</title>

 	<style type="text/css">
		
		img {
			width: 50px;
			height: 50px;
		}
	</style> 	
 </head>
 <body>
 

 	
 	<?php foreach($films as $film) : ?>
 			<ul>
 			<li><img src=img\<?= $film["Logo"] ?>></li>
 			<li>
 				<a href="admin.php?Logo=<?= $film["Logo"] ?>&Judul=<?= $film["Judul"] ?>&
 					Sutradara=<?= $film["Sutradara"] ?>&Pemeran=<?= $film["Pemeran"] ?>&
 					Rating=<?= $film["Rating"]  ?>&Tahun_Rilis=<?= $film["Tahun_Rilis"] ?>
 					"><?= $film["Judul"] ?></a>
 			</li>
 			</ul>
 	<?php endforeach; ?>


 </body>
 </html>