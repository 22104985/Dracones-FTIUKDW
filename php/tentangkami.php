old	new	
...	...	@@ -0,0 +1,131 @@
	1	+<!DOCTYPE html>
	2	+<html>
	3	+<head>
	4	+<title>Tentang Kami</title>
	5	+<link rel="stylesheet" type="text/css" href="../css/as.css" />
	6	+
	7	+<link rel="stylesheet" href="../css/style.css" />
	8	+
	9	+    <script type="text/javascript" src="../js/jquery.js"></script>
	10	+    <script type="text/javascript" src="../js/dropdown.js"></script>
	11	+    <script type="text/javascript" src="../js/slides.js"></script>
	12	+    <script type="text/javascript" src="../js/slideshow.js"></script>
	13	+    <script type="text/javascript" src="../js/slide-menu.js"></script>
	14	+      <script type="text/javascript">
	15	+        $(document).ready(function()
	16	+        {
	17	+          
	18	+
	19	+          
	20	+      $("a#login").click(function()
	21	+          {
	22	+            alert("hallo, silahkan masuk ");
	23	+            
	24	+          });
	25	+      $("a#scart").click(function()
	26	+          {
	27	+            alert("masih kosong! ");
	28	+            
	29	+          });
	30	+        });
	31	+      </script>
	32	+</head>
	33	+<body>
	34	+    <div id="wrapper">
	35	+        <div id="headerwrap">
	36	+        <div id="header"><img src="../images/logo.png" width="511" height="80">
	37	+            <p id="trblock">
	38	+              <a href="" id="scart">Keranjang Belanja</a><br>
	39	+                        <a href="login_nodatabase.php" id="login" >Masuk  </a>
	40	+                    <a href="akunbaru.php">  Daftar</a>
	41	+          </p>
	42	+        </div>
	43	+        </div>
	44	+        <div id="navigationwrap">
	45	+        <div class="mn-container" >
	46	+  
	47	+    <ul id="topnav" >
	48	+
	49	+      <li><a href="index.php">Beranda</a></li>
	50	+      <li><a href="carabelanja.php">Cara Belanja</a></li>
	51	+      <li><a href="tentangkami.php">Tentang Kami</a></li>
	52	+      
	53	+    </ul>
	54	+  </div>
	55	+        </div>
	56	+        <div id="leftcolumnwrap">
	57	+        <div id="leftcolumn">
	58	+          <table><thead>
	59	+            <tr>
	60	+            <th height="33" bgcolor="#00FFFF">Kategori</th>
	61	+
	62	+            </tr>
	63	+
	64	+
	65	+            </thead>
	66	+             <tbody>
	67	+<tr>
	68	+<td><a href="fd.php">Flashdisk</a></td>
	69	+</tr>
	70	+<tr>
	71	+<td><a href="hdd.php">HD Eksternal</a></td>
	72	+</tr>
	73	+<tr>
	74	+<td><a href="headphone.php">Headphone</a></td>
	75	+</tr>
	76	+<tr>
	77	+<td><a href="modem.php">Modem</a></td>
	78	+</tr>
	79	+<tr>
	80	+<td><a href="speaker.php">Speaker</a></td>
	81	+</tr>
	82	+
	83	+            </tbody>
	84	+
	85	+
	86	+
	87	+
	88	+
	89	+
	90	+            </table>
	91	+            
	92	+        </div>
	93	+        </div>
	94	+        <div id="contentwrap">
	95	+        <div id="content1">
	96	+          Tentang Kami</div>
	97	+        </div>
	98	+        <div id="rightcolumnwrap">
	99	+        <div id="rightcolumn">
	100	+          <table>
	101	+            <thead>
	102	+              <tr>
	103	+                <th height="33" bgcolor="#00FFFF">Kontak Kami</th>
	104	+              </tr>
	105	+            </thead>
	106	+            <tbody>
	107	+              <tr>
	108	+                <td height="200"><strong>Telepon</strong><br>
	109	+                  0274-556677<br>
	110	+                  <strong>Sms</strong><br>
	111	+                  0852-5000-0000<br>
	112	+                  <strong>Pin BB</strong><br>
	113	+                  29A11110<br>
	114	+                  <strong>Whatsapp / Sms</strong><br>
	115	+                  0852-5000-0000<br>
	116	+                  <br>
	117	+                Jl Demangan Yogyakarta<p><img src="../images/facebook.png" width="60" height="60"><img src="../images/twitter.png" width="60" height="60"></p></td>
	118	+                
	119	+              </tr>
	120	+            </tbody>
	121	+          </table>
	122	+        </div>
	123	+        </div>
	124	+        <div id="footerwrap">
	125	+        <div id="footer">
	126	+            <p>Copyright © 2013 Dracones - Cepat & Murah Hanya Untuk Anda.</p>
	127	+        </div>
	128	+        </div>
	129	+    </div>
	130	+</body>
	131	+</html>
