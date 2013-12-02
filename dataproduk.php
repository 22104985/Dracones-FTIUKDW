<?php


session_start();
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
$username=$_SESSION['username'];

include "koneksi.php";

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Produk</title>
</head>
<body>
<h2>Data Produk</h2>
<?php
if (!empty($_SESSION['username']) AND $_SESSION['username'] == 'admin'){
echo "<a href=tambahbarang.php>Tambah Data</a><br>";
echo "<a href=index.php>Beranda</a><br>";
echo "<a href=logout.php>Keluar</a>";}
else {
echo "Hanya Admin Yang Boleh Masuk Halaman Ini!";
echo "<a href=index.php>Kembali Ke Beranda</a>";}
?>
<table>
<tr><td>Id</td>
<td>Code Produk</td><td>Nama Produk</td><td>Info </td><td >Gambar</td><td >Harga</td><td>Produk</td>
<?php 
echo "<td colspan=2>Pilihan</td>";
?>
</tr>
<?php

                                            $query = mysql_query('SELECT * FROM products  ');
                                              while($data = mysql_fetch_assoc($query))
                                              {
                                              echo "<tr>";
echo "<td>".$data['id']."</td>";
echo "<td>".$data['product_code']."</td>";
echo "<td>".$data['product_name']."</td>";
echo "<td>".$data['product_desc']."</td>";
echo "<td>".$data['product_img_name']."</td>";
echo "<td>".$data['price']."</td>";
echo "<td>".$data['produk']."</td>";
                                                echo             "<form action='hapus.php?id=".$data['id']."' method='post'>";    
                                                echo             "<td><button class='btn btn-danger' name='delete'>Hapus</button></td>";
                                                echo             "</form>";    
                                                echo        "</tr>";
                                                


                                              }
                                          ?>

</table>
</body></html>


                        
                        
                         
