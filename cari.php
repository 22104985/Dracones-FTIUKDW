<?php


session_start();
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
$username=$_SESSION['username'];

include_once("config.php");

?>


<!DOCTYPE html>
<html>
<head>
<title>Hasil Cari</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/regis.css" />
<link href="style/style.css" rel="stylesheet" type="text/css">

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
      
    </ul><ul id="topnav1" ><li ><form accept-charset="utf-8" method="post" action="pencarian.php">
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
            
           <tbody>
              
<?php
                     require("config.php");
                     if(isset($_POST['search']) || isset($_SESSION['pencarian'])){
                        if(isset($_POST['search'])){
                            $pencarian = $_POST['search'];
                            $_SESSION['pencarian'] = $pencarian;
                        }else if(isset($_SESSION['pencarian'])){
                            $pencarian = $_SESSION['pencarian'];
                        }
                
                         //non case sensitive
                         strtoupper($pencarian);
                         strip_tags($pencarian);
                         trim($pencarian);
                         $sql = "SELECT * FROM products WHERE upper(product_name) LIKE'%$pencarian%'";
                         $result = mysqli_query($mysqli,$sql);
                         $cek=mysqli_num_rows($result);
                         if($cek > 0){
                        while($data = mysqli_fetch_assoc($result)){
                            $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products WHERE upper(product_name) LIKE'%$pencarian%'");
    if ($results) { 
        //output results from database
        while($obj = $results->fetch_object())
        {
			
			echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="images/'.$obj->product_img_name.' "></div>';
            echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
            echo '<div class="product-desc">'.$obj->product_desc.'</div>';
            echo '<div class="product-info">Harga '.$currency.$obj->price.' <button class="add_to_cart">Beli</button></div>';
            echo '</div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
        }mysqli_close($mysqli);
    
    }
                        }
                         }
                         else{
                             echo"<div id='tdkketemu'>Tidak ditemukan barang yang anda cari</div>";
                         }
                     }
                     mysqli_close($mysqli);
                 ?>
        </div>
        </div>

    

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
