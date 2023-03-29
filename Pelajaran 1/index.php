<?php 
	// for ($i = 0; $i < 5; $i++) { 
	// 	echo "kontol <br>";
	// }
	
	// $i = 0;
	// while ($i > 5) {
	// 	echo "berak sekebon <br>";

	// 	$i++;
	// }

	// $i = 2;
	// do {
	// 	echo "satanic <br>";

	// 	$i++;
	// } while ($i < 5);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<style>
 		.warna-baris {
 			background-color: orangered;
 		}
 	</style>
 </head>
 <body>
 <!-- 		<table border="2" cellspacing="3" cellpadding="5">
 			<?php 
 				for($i=1; $i<=3; $i++ ){
 					echo "<tr>";
 						for ($j=1; $j<=5; $j++) { 
 							echo "<td>$i,$j</td>";
 						}
 					echo "</tr>";
 				}	

 			 ?>

 		</table> -->

 		<table border="2" cellpadding="6" cellspacing="4">
 			<?php 
 				for ($i=1; $i <= 5; $i++){
 					if ($i % 2 == 1) {
 						echo "<tr class='warna-baris'>";	
 					} else {
 						echo "<tr>";
 					}
 						for ($j=1; $j <= 5; $j++){
 							echo "<td>$i, $j</td>";
 						}
 					echo "</tr>";	
 				}

 			 ?>

 		</table>
 </body>
 </html>
