<?php
include "config.php";
if($_POST) {
	# Validasi form, jika form kosong buat daftar error 
	$message = array();
	if(trim($_POST['product_code'])=="") {
		$message[] = "<b>product_code</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['product_name'])=="") {
		$message[] = "<b>product_name</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['produk'])=="") {
		$message[] = "<b>produk</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['price'])=="") {
		$message[] = "<b>price</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['product_img_name'])=="") {
		$message[] = "<b>product_img_name</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['product_desc'])=="") {
		$message[] = "<b>product_desc</b> tidak boleh kosong, harus diisi !";		
	}
}

	$product_code = $_POST['product_code'];
	$product_name = $_POST['product_name'];
	$product_desc = $_POST['product_desc'];
	$product_img_name = $_POST['product_img_name'];
	$price = $_POST['price'];

	
	$produk = $_POST['produk'];
	
if(count($message) === 0){	

	
	
	$query = ("INSERT INTO products  VALUES ('','$product_code','$product_name','$product_desc','$product_img_name','$price','$produk')");

	if(mysqli_query($mysqli,$query)){
                echo "<script type='text/javascript'>alert('Daftar berhasil!');</script>";
                header("location:dataproduk.php");
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
		include "tambahbarang.php";
	}
	
	
	?>
