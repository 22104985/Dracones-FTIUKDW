<?php
session_start();
	
	include("koneksi.php");
	$id = $_GET['id'];


	$query = "DELETE from `products` where id = $id";

	if(mysql_query($query)){
		header ("location:dataproduk.php");
	}
	else
	{
		echo "Data gagal masuk";
	}


?>
