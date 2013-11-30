
<?php
include "config.php";


if($_POST) {
	# Validasi form, jika form kosong buat daftar error 
	$message = array();
	if(trim($_POST['username'])=="") {
		$message[] = "<b>Username</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['password'])=="") {
		$message[] = "<b>Password</b> tidak boleh kosong, harus diisi !";		
	}
}
if($_POST) {
	# Validasi form, jika form kosong buat daftar error 
	$pesan = array();
	if(trim($_POST['username'])!="username" || trim($_POST['password'])!="password" ) {
		$pesan[] = "<b>Username atau Password</b> salah !";		
	}

	
}	
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	

	
	
	

	
if(count($message)==0){ 
$sql = "SELECT id,username, password FROM user 
	WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($mysqli, $sql);
	
		if(mysqli_affected_rows($mysqli) > 0) {
			session_start();
			
			
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $password;
			$_SESSION["kategori"] = $kategori;
			echo "<a href='profil.php'>".$username."</a>";
					echo "<a href='php/logout.php'>     Keluar</a>";
					
                 $cssFile = "css/setelah.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";
		header("location:index.php");
		exit();
	}
	else {
		echo "<div class='mssgBox'>";
		echo "<img src='images/attention.png'><br><hr>";
			$Num=0;
			foreach ($pesan as $indeks=>$pesan_tampil) { 
			$Num++;
				echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
			} 
		echo "</div> <br>"; 		

		// Tampilkan lagi form
		include "masuk.php";
		
	}
	mysqli_close($mysqli);
		
	
		

	}
	else{# Jika menemukan daftar error pada variabel $message[]
	
		// Tampilkan semua $message error yang ada
		echo "<div class='mssgBox'>";
		echo "<img src='images/attention.png'><br><hr>";
			$Num=0;
			foreach ($message as $indeks=>$pesan_tampil) { 
			$Num++;
				echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
			} 
		echo "</div> <br>"; 		

		// Tampilkan lagi form
		include "masuk.php";
	}


	
	
	?>
