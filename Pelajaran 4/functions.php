<?php 

	//Koneksi ke database, param ("host", "nama admin", "password[kosongkan]", "nama db")
	$conn = mysqli_connect("localhost", "root", "", "film");

	function query($film){
		
		global $conn;

			
		$result = mysqli_query($conn, $film);
		$rows = [];

		while( $fil = mysqli_fetch_assoc($result) ) {
			$rows[] = $fil; 


		}
		return $rows;

	}


	function tambah($data){

		global $conn;

		//ambil data dari setiap element dalam form
		$Logo = htmlspecialchars($data["Logo"]);
		$Judul = htmlspecialchars($data["Judul"]);
		$Sutradara = htmlspecialchars($data["Sutradara"]);
		$Pemeran = htmlspecialchars($data["Pemeran"]);
		$Rating = htmlspecialchars($data["Rating"]);
		$Tahun = htmlspecialchars($data["Tahun_Rilis"]);


		$query = "INSERT INTO film VALUES ('', '$Logo', '$Judul', '$Sutradara', '$Pemeran', '$Rating', '$Tahun')";
	
		//fungsi query
		$result = mysqli_query($conn, $query);

		return $result;


	}


	function hapus($id){

		global $conn;

		//hapus record dari database
		mysqli_query($conn, "DELETE FROM film WHERE id = $id");


		return mysqli_affected_rows($conn);
	}



	function ubah($data){

		global $conn;

		//ambil data dari setiap element dalam form
		$Id = $data["id"];

		var_dump($data);		
		$Logo = htmlspecialchars($data["Logo"]);
		$Judul = htmlspecialchars($data["Judul"]);
		$Sutradara = htmlspecialchars($data["Sutradara"]);
		$Pemeran = htmlspecialchars($data["Pemeran"]);
		$Rating = htmlspecialchars($data["Rating"]);
		$Tahun = htmlspecialchars($data["Tahun_Rilis"]);


		$query = "UPDATE film SET Logo = '$Logo', Judul ='$Judul', Sutradara = '$Sutradara', Pemeran = '$Pemeran', Rating = '$Rating', Tahun Rilis = '$Tahun' WHERE id = $Id";
	
		//fungsi query
		mysqli_query($conn, $query);


		return mysqli_affected_rows($conn);
	}




 ?>