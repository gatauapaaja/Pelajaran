<?php 
   
    if(isset($_POST["submit"])){
 
        if($_POST["nama"] == "admin" && $_POST["password"] == "123") {

            header("Location: index2.php");
            exit;
        }

        else{

            $error = true;
        }
    }    

 ?>

 
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>

    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / password anda salah</p>
    <?php endif; ?> 

 	<form action="" method="post">
		<label>Masukkan Nama :</label>
		<input type="text" name="nama"> 
		<br>
        <label>Masukkan Password</label>
        <input type="password" name="password">
        <br>
		<button type="submit" name="submit">Kirim</button>		
 	</form>
 </body>
 </html>