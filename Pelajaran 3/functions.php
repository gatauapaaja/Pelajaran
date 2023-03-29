<?php 

	//Koneksi ke database, param ("host", "nama admin", "password[kosongkan]", "nama db")
	$conn = mysqli_connect("localhost", "root", "", "film");

	function query($query){
		
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];

		while( $fil = mysqli_fetch_assoc($result) ) {
			$rows[] = $fil; 
		}

		return $rows;
	}
 ?>