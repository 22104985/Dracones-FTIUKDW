<?php 
$host="mysql.idhostinger.com"; 
$user="u822547145_draco"; 
$password="aquatimi"; 
$database="u822547145_draco"; 
$koneksi=mysql_connect($host,$user,$password); 
	mysql_select_db($database,$koneksi); 
	
	//cek koneksi 
	
	if($koneksi){ 
	//echo "berhasil koneksi"; 
		}else{ 
			echo "gagal koneksi"; 
} 
?> 



