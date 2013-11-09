<?php 
// difinisi session
session_start();
// hapus semua session
session_destroy();
echo "Anda telah logout <br />";
echo " <a href='login_nodatabase.php'> << Kembali Masuk >>  </a>";
echo " <a href='index.php'>    << Kembali Ke Beranda >> </a>";
?>