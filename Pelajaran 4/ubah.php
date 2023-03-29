<?php 

	require 'functions.php';

	
	//ambil data dari URL

	$id = $_GET["id"];


	//query data berdasarkan data film
	$cek = query("SELECT * FROM film WHERE id = $id")[0];




	//cek apakah tombol submit sudah ditekan atau belum
	if ( isset($_POST["submit"])) {
		
		
		if( ubah($_POST) > 0 ) {

			echo "
			<script> 
				alert('Data berhasil diubah'); 
				document.location.href = 'index.php';
			</script>
			";
		} else {

			echo "
			<script> 
				alert('Data gagal diubah'); 
				document.location.href = 'index.php';
			</script>
			";
		}
	
			



	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Data Film</title>
</head>
<body>

	<h1>Ubah Data Film</h1>
	
<form action="" method="post">

	<input type="hidden" name="id" value="<?= $cek["id"];  ?>">
	<ul>
		<li>
			<label for="Logo">Logo :</label>
			<input type="text" name="Logo" id="Logo" required value="<?= $cek["Logo"];  ?>">
		</li>
		<li>
			<label for="Judul">Judul :</label>
			<input type="text" name="Judul" id="Judul" value="<?= $cek["Judul"];  ?>">
		</li>
		<li>
			<label for="Sutra">Sutradara :</label>
			<input type="text" name="Sutradara" id="Sutra" value="<?= $cek["Sutradara"];  ?>">
		</li>
		<li>
			<label for="Pamer">Pemeran :</label>
			<input type="text" name="Pemeran" id="Pamer" value="<?= $cek["Pemeran"];  ?>">
		</li>
		<li>
			<label for="Rat">Rating :</label>
			<input type="text" name="Rating" id="Rat" value="<?= $cek["Rating"];  ?>">
		</li>
		<li>
			<label for="Thn">Tahun Rilis :</label>
			<input type="text" name="Tahun_Rilis" id="Thn" value="<?= $cek["Tahun Rilis"];  ?>">
		</li>
		<button type="submit" name="submit">Ubah Data</button>
	</ul>
</form>


</body>
</html>