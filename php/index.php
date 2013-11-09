<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>Home</title>

<link rel="stylesheet" type="text/css" href="../css/index.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<link rel="stylesheet" href="../css/style.css" />
			
		<script type="text/javascript" src="../js/dropdown.js"></script>
		<script type="text/javascript" src="../js/slides.js"></script>
		
    <script type="text/javascript" src="../js/slide-menu.js"></script>
    
  	  <script type="text/javascript">
  	  	$(document).ready(function()
  	  	{
  	  		

  	  		
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
          <p id="scroller"></p>
<script type="text/javascript">
// Original: Pun Man Kit 
function scroll(position) { 
var msg = "Hallo selamat datang ^__^";
var out = "";
var sc = document.getElementById("scroller");
for (var i=0; i < position; i++){ 
out += msg.charAt(i);
} 
out += msg.charAt(position); 
sc.innerHTML = out; 
position++;
if (position != msg.length) { 
window.setTimeout(function() { scroll(position); }, 50); 
} 
else {
window.setTimeout(function() { scroll(0); }, 2000); 
}
} 
scroll(0); 
</script>
        <div id="header"><img src="../images/logo.png" width="511" height="80">

            <p id="trblock">
              <a href="" id="scart">Keranjang Belanja</a><br>
                        <a href="login_nodatabase.php" id="login" >Masuk  </a>
                    <a href="akunbaru.php">  Daftar</a>
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
        <div id="leftcolumnwrap">
        <div id="leftcolumn">
          <table><thead>
            <tr>
            <th height="33" bgcolor="#00FFFF">Kategori Produk</th>

            </tr>


            </thead>
            <tbody>
<tr>
<td><a href="fd.php">Flashdisk</a></td>
</tr>
<tr>
<td><a href="hdd.php">HD Eksternal</a></td>
</tr>
<tr>
<td><a href="headphone.php">Headphone</a></td>
</tr>
<tr>
<td><a href="modem.php">Modem</a></td>
</tr>
<tr>
<td><a href="speaker.php">Speaker</a></td>
</tr>

            </tbody>






          </table>
            
        </div>
        </div>
        <div id="contentwrap">
        <div id="content1">
        <div id="slideshow">
        
<a href=""><img src="../images/photo1.jpg" alt=""   width="640" height="400" class="active"/></a>


			
		</div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
          
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
                <td height="200"><p><strong>Telepon</strong><br>
                  0274-556677<br>
                  <strong>Sms</strong><br>
                  0852-5000-0000<br>
                  <strong>Pin BB</strong><br>
                  29A11110<br>
                  <strong>Whatsapp / Sms</strong><br>
                  0852-5000-0000<br>
                  <br>
                Jl Demangan Yogyakarta</p>
                <p><img src="../images/facebook.png" width="60" height="60"><img src="../images/twitter.png" width="60" height="60"></p></td>
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
