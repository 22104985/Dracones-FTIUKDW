<!DOCTYPE html>
<html>
<head>
<title>Akun Baru</title>
<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/dropdown.js"></script>
    <script type="text/javascript" src="../js/slides.js"></script>
    <script type="text/javascript" src="../js/slideshow.js"></script>
    <script type="text/javascript" src="../js/slide-menu.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
      


<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/akunbaru.css" />
<script type="text/javascript">
        $(document).ready(function()
        {
          $("a#daftar").click(function()
          {
            alert("Hallo, mohon daftar dulu ya !");
            
          });

          $("a#login").click(function()
          {
            alert("hallo, silahkan masuk ");
            
          });
          $("a#scart").click(function()
          {
            alert("masih kosong! ");
            
          });
            
        });
      </script>

</head>
<body>
    <div id="wrapper">
        <div id="headerwrap">
        <div id="header"><img src="../images/logo.png" width="511" height="80">
            <p id="trblock">
              <a href="" id="scart">Keranjang Belanja</a><br>
                        <a href="login_nodatabase.php" id="login" >Login</a>
                    <a href="akunbaru.php">Daftar</a>
          </p>
        </div>
        </div>
      <div id="navigationwrap">
        <div class="mn-container" >
  
    <ul id="topnav" >

      <li><a href="index.php">Beranda</a></li>
      <li><a href="carabelanja.php">Cara Belanja</a></li>
      <li><a href="tentangkami.php">Tentang Kami</a></li>
      
    </ul>
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
              <tr>
                <td width="90">&nbsp;</td>
                <td width="269"><form name="form1" method="post" action="">
                  <input type="radio" name="radio" id="radio" value="radio">
                  <label for="radio">Mr</label>
                </form></td>
                <td width="269"><form name="form2" method="post" action="">
                  <input type="radio" name="radio2" id="radio2" value="radio2">
                  <label for="radio2">Ms</label>
                </form></td>
              </tr>
              <tr>
                <td>Username</td>
                <td colspan="2"><input type="text"  name="email2" placeholder="  "/></td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td colspan="2"><input type="text"  name="email3" placeholder="  "/></td>
              </tr>
              <tr>
                <td>Email</td>
                <td colspan="2"><input type="text"  name="email" placeholder="  "/></td>
              </tr>
              <tr>
                <td>Password</td>
                <td colspan="2"><input type="password"  name="pass" placeholder="  "/></td>
              </tr>
              <tr>
                <td>No Telepon</td>
                <td colspan="2"><input type="text"  name="email4" placeholder="  "/></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td colspan="2"><form name="form3" method="post" action="">
                  <label for="textarea"></label>
                  <textarea name="textarea" id="textarea"></textarea>
                </form></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><button type="submit">Daftar</button></td>
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
                Jl Demangan Yogyakarta<p><img src="../images/facebook.png" width="60" height="60"><img src="../images/twitter.png" width="60" height="60"></p></td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <div id="footerwrap">
        <div id="footer">
            <p>Copyright © 2013 Dracones - Cepat & Murah Hanya Untuk Anda.        </p>
        </div>
      </div>
    </div>
</body>
</html>

