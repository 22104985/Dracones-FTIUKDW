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
	if(trim($_POST['email'])=="") {
		$message[] = "<b>Email</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['alamat'])=="") {
		$message[] = "<b>Alamat</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['no_telepon'])=="") {
		$message[] = "<b>No Telepon</b> tidak boleh kosong, harus diisi !";		
	}
}

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$no_telepon = $_POST['no_telepon'];
	$alamat = $_POST['alamat'];
	
if(count($message) === 0){	

	
	
	$query = ("INSERT INTO user  VALUES ('','$username','$email','$password','$no_telepon','$alamat')");

	if(mysqli_query($mysqli,$query)){
                echo "<script type='text/javascript'>alert('Daftar berhasil!');</script>";
                header("location:index.php");
            }

	
	echo "<div class='success'>Data berhasil disimpan</div><br>";
}

else{
		# Jika menemukan daftar error pada variabel $message[]
	
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
		include "regis.php";
	}
	
	
	?>
