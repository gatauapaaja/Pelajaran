<?php 

	require 'functions.php';

	
	//cek apakah tombol submit sudah ditekan atau belum
	if ( isset($_POST["submit"])) {
		
		
		if( tambah($_POST) > 0 ) {

			echo "
			<script> 
				alert('Data berhasil ditambahkan'); 
				document.location.href = 'index.php';
			</script>
			";
		} else {

			echo "
			<script> 
				alert('Data gagal ditambahkan'); 
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
	<title>Tambah Data Film</title>
</head>
<body>

	<h1>Tambah Data Film</h1>
	
<form action="" method="post">
	<ul>
		<li>
			<label for="Logo">Logo :</label>
			<input type="text" name="Logo" id="Logo" required>
		</li>
		<li>
			<label for="Judul">Judul :</label>
			<input type="text" name="Judul" id="Judul">
		</li>
		<li>
			<label for="Sutra">Sutradara :</label>
			<input type="text" name="Sutradara" id="Sutra">
		</li>
		<li>
			<label for="Pamer">Pemeran :</label>
			<input type="text" name="Pemeran" id="Pamer">
		</li>
		<li>
			<label for="Rat">Rating :</label>
			<input type="text" name="Rating" id="Rat">
		</li>
		<li>
			<label for="Thn">Tahun Rilis :</label>
			<input type="text" name="Tahun_Rilis" id="Thn">
		</li>
		<button type="submit" name="submit">Kirim Data</button>
	</ul>
</form>


</body>
</html>