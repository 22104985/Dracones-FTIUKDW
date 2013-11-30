<?php


session_start();
error_reporting(E_ALL ^ E_NOTICE);
$username=$_SESSION['username'];

include_once("config.php");

?>


<!DOCTYPE html>
<html>
<head>
<title>Headphone</title>
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
      <div id="leftcolumnwrap">
        <div id="leftcolumn">
          <table><thead>
            <tr>
            <th height="33" bgcolor="#00FFFF">Kategori</th>

            </tr>


            </thead>
    <tr>
     
<td> <a href="produk.php">  Flashdisk</a></td>
</tr>
<tr>
<td><a href="hdd.php">HDD</a></td>
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

</tr>

            </tbody>






          </table>
            
        </div>
        </div>
        <div id="contentwrap">

        <div id="content">
         
            
           <tbody>
              <div class="products">
              <h1>Products</h1>
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM products WHERE produk='headphone'");
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
        }
    
    }
    ?>
    </div><div class="shopping-cart">
<h2>Keranjang Belanja</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">jmlh Brng : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Harga :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="cart.php">Check-out!</a></span>';
}else{
    echo 'Keranjang Belanja Kosong';
}
?>
</div>
    

            </tbody>
         
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
