<?php


session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Masuk</title>
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
              <a href="" id="scart">Keranjang Belanja</a><br>
                       <a href="masuk.php" id="login" >Masuk  </a>
                    <a href="regis.php">  Daftar</a>
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
                <th height="33" colspan="3" bgcolor="#00FFFF">Masuk</th>
              </tr>
            </thead>
           <tbody>
              <tr><form name="form1" method="post" action="loginsukses.php">
                <td>Nama User</td>
                <td colspan="2"><input type="text"  name="username" placeholder="  "/></td>
              
              
              
              <tr>
                <td height="37">Password</td>
                <td colspan="2"><input type="password"  name="password" placeholder="  "/></td>
              </tr>
              <tr>
              <td></td>
                <td><button type="submit" name="login">Masuk!</button></td>
                </form>
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
