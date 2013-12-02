<?php


session_start();
error_reporting(E_ALL ^ E_NOTICE);
$username=$_SESSION['username'];
require "config.php";

?>


<!DOCTYPE html>
<html>
<head>
<title>Cara Belanja</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/regis.css" />

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/dropdown.js"></script>
    <script type="text/javascript" src="js/slides.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>
    <script type="text/javascript" src="js/slide-menu.js"></script>
      <script type="text/javascript">
        $(document).ready(function()
        {
          

          
      $("a#login").click(function()
          {
            alert("hallo, silahkan masuk ");
            
          });
     
        });
      </script>

</head>
<body>
    <div id="wrapper">
        <div id="headerwrap">
        <div id="header"><img src="images/logo.png" width="511" height="80">
             <p id="trblock">
              <a href="cart.php" id="scart">Keranjang Belanja</a><br>
                        <a href="masuk.php" id="login" >Masuk  </a>
                        <?php
						
						if($_SESSION["username"] != NULL )

                        {
                              
                              echo "<a href='profil.php'>".$username."</a>";
					echo "<a href='logout.php'>     Keluar</a>";
					
                 $cssFile = "css/setelah.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";


                        }

                        


                        ?>
                    <a href="regis.php" id="regis">  Daftar</a> 
          </p>
        </div>
        </div>
        <div id="navigationwrap">
        <div class="mn-container" >
  
    <ul id="topnav" >

     <li><a href="index.php">Beranda</a></li>
      <li><a href="carabelanja.php">Cara Belanja</a></li>
      <li><a href="tentangkami.php">Tentang Kami</a></li>
      <li><a href="produk.php">Produk</a></li>
      
    </ul><ul id="topnav1" ><li ><form accept-charset="utf-8" method="post" action="cari.php">
                   <table>
                        <tbody>
                            <tr>
                                <td>
                                    <input id="cari" type="search"  size="22" value="" name="search" placeholder="Pencarian"></input>
                                </td>
                                <td>
                                    <input id="butcar" type="submit" style="cursor:pointer;" value="" name=""></input>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </form></li></ul>
  </div>
        </div>
      
        <div id="contentwrap">
        <div id="content">
          <table width="788">
            <thead>
              <tr>
                <th height="33" colspan="3" bgcolor="#00FFFF">Cara Belanja</th>
              </tr>
            </thead>
           <tbody>
               <tr><td>
              <ul  >

     <li>Klik Daftar</li>
     <li>Isi Form Dengan lengkap.</li>
     <li>Pastikan email anda diisi dengan benar.</li>
     <li>Setelah anda selesai anda bisa login dengan user name dan password anda.</li>
     <li>Pilih barang2 yang anda butuhkan.</li>
     <li>Klik beli untuk memasukan ke keranjang belanja anda. </li>
     <li>Pilih proses COD(untuk daerah jogja) atau Transfer.</li>
     <li>Bila anda memilih transfer, Anda dapat mencatat nomor rekening bank Kami untuk proses pembayaran.</li>
     <li>Laporkan pembayaran Anda segera jika sudah melakukan transfer ke rekening bank Kami, dengan cara menghubungi no staff kami.</li>
     
     
      
      
    </ul>
           
           </td>
           </tr>
            </tbody>
          </table>
        </div>
      </div>
        <div id="rightcolumnwrap">
        <div id="rightcolumn">
          <table>
            <thead>
              <tr>
                <th height="33" bgcolor="#00FFFF">Kontak Kami</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td height="200"><strong>Telepon</strong><br>
                  0274-556677<br>
                  <strong>Sms</strong><br>
                  0852-5000-0000<br>
                  <strong>Pin BB</strong><br>
                  29A11110<br>
                  <strong>Whatsapp / Sms</strong><br>
                  0852-5000-0000<br>
                  <br>
                Jl Demangan Yogyakarta<p><img src="images/facebook.png" width="60" height="60"><img src="images/twitter.png" width="60" height="60"></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <div id="footerwrap">
        <div id="footer">
            <p>Copyright © 2013 Dracones - Cepat & Murah Hanya Untuk Anda.</p>
        </div>
        </div>
    </div>
</body>
</html>
