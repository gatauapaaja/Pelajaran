<?php 

	//Koneksi ke database, param ("host", "nama admin", "password[kosongkan]", "nama db")
	$conn = mysqli_connect("localhost", "root", "", "film");

	//Ambil data tabel dari database, param ("variabel koneksi", "Query SQL yg diinginkan")
	$result = mysqli_query($conn, "SELECT * FROM film");

	
	//Fungsi untuk menangkap data dari database
	//mysqli_fetch_row() -> mengembalikan nilai array numerik
	//mysqli_fetch_assoc()-> mengembalikan nilai array assosiative
	//mysqli_fetch_array() -> mengembalikan nilai array numerik & assosiative

	
	$fil = mysqli_fetch_assoc($result);


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP & DATABASE</title>

	<style type="text/css">
		
		img {
			width: 50px;
			height: 50px;
		}
	</style> 	
</head>
<body>


	<table border="1" cellpadding="3" cellspacing="3">
		
		<tr>
			<th>Id</th>
			<th>Aksi</th>
			<th>Logo</th>
			<th>Judul</th>
			<th>Sutradara</th>
			<th>Pemeran</th>
			<th>Rating</th>
			<th>Tahun Rilis</th>
		</tr>


		<?php $i = 1;  ?>
		<?php while ($fil = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td>
				<a href="">Ubah</a> ||
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?= $fil["Logo"]  ?>"></td>
			<td><?= $fil["Judul"]  ?></td>
			<td><?= $fil["Sutradara"]  ?></td>
			<td><?= $fil["Pemeran"]  ?></td>
			<td><?= $fil["Rating"]  ?></td>
			<td><?= $fil["Tahun Rilis"]  ?></td>
		</tr>

	<?php endwhile; ?>


	</table>

</body>
</html>