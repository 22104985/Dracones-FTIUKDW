<?php


session_start();
error_reporting(E_ALL ^ E_NOTICE);
$username=$_SESSION['username'];

include_once("config.php");

?>


<!DOCTYPE html>
<html>
<head>
<title>Keranjang Belanja</title>
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
              <a href="" id="scart">Keranjang Belanja</a><br>
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
             
              <div class="view-cart">
<h2>Keranjang Belanja</h2>
<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="metode.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Jmlh Brng : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->product_desc.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_price['.$cart_items.']" value="'.$obj->price.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<input type="submit" value="Bayar" />';
		echo '</form>';
		echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong></span>';
    }else{
		echo 'Keranjang Belanja Kosong';
	}
	
    ?>
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
                Jl Demangan Yogyakarta<p><img src="../images/facebook.png" width="60" height="60"><img src="../images/twitter.png" width="60" height="60"></p></td>
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
