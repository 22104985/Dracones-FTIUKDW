old	new	
...	...	@@ -0,0 +1,287 @@
	1	+<!DOCTYPE html>
	2	+<html>
	3	+<head>
	4	+<title>Speaker</title>
	5	+
	6	+<script type="text/javascript" src="../js/jquery.js"></script>
	7	+<link rel="stylesheet" href="../css/style.css" />
	8	+<link rel="stylesheet" type="text/css" href="../css/kategori.css" />
	9	+
	10	+<script type="text/javascript" src="../js/jquery.js"></script>
	11	+<script type="text/javascript" src="../js/dropdown.js"></script>
	12	+    <script type="text/javascript" src="../js/slides.js"></script>
	13	+    <script type="text/javascript" src="../js/slideshow.js"></script>
	14	+    <script type="text/javascript" src="../js/slide-menu.js"></script>
	15	+      <script type="text/javascript">
	16	+        $(document).ready(function()
	17	+        {
	18	+          
	19	+
	20	+          $("button.beli").click(function()
	21	+          {
	22	+            alert("Login Dulu Baru Beli ");
	23	+            
	24	+          });
	25	+      $("a#login").click(function()
	26	+          {
	27	+            alert("Hallo, Silahkan masuk ");
	28	+            
	29	+          });
	30	+
	31	+      $("a#scart").click(function()
	32	+          {
	33	+            alert("Masih kosong! ");
	34	+            
	35	+          });
	36	+        });
	37	+      </script>
	38	+
	39	+</head>
	40	+<body>
	41	+    <div id="wrapper">
	42	+        <div id="headerwrap">
	43	+        <div id="header"><img src="../images/logo.png" width="511" height="80">
	44	+            <p id="trblock">
	45	+              <a href="" id="scart">Keranjang Belanja</a><br>
	46	+                        <a href="login_nodatabase.php" id="login" >Masuk  </a>
	47	+                    <a href="akunbaru.php">  Daftar</a>
	48	+          </p>
	49	+        </div>
	50	+        </div>
	51	+        <div id="navigationwrap">
	52	+        <div class="mn-container" >
	53	+  
	54	+    <ul id="topnav" >
	55	+
	56	+      <li><a href="index.php">Beranda</a></li>
	57	+      <li><a href="carabelanja.php">Cara Belanja</a></li>
	58	+      <li><a href="tentangkami.php">Tentang Kami</a></li>
	59	+      
	60	+    </ul>
	61	+  </div>
	62	+        </div>
	63	+        <div id="leftcolumnwrap">
	64	+        <div id="leftcolumn">
	65	+          <table><thead>
	66	+            <tr>
	67	+            <th height="33" bgcolor="#00FFFF">Kategori</th>
	68	+
	69	+            </tr>
	70	+
	71	+
	72	+            </thead>
	73	+    <tr>
	74	+<td><a href="fd.php">Flashdisk</a></td>
	75	+</tr>
	76	+<tr>
	77	+<td><a href="hdd.php">HD Eksternal</a></td>
	78	+</tr>
	79	+<tr>
	80	+<td><a href="headphone.php">Headphone</a></td>
	81	+</tr>
	82	+<tr>
	83	+<td><a href="modem.php">Modem</a></td>
	84	+</tr>
	85	+<tr>
	86	+<td><a href="speaker.php">Speaker</a></td>
	87	+</tr>
	88	+
	89	+            </tbody>
	90	+
	91	+
	92	+
	93	+
	94	+
	95	+
	96	+          </table>
	97	+            
	98	+        </div>
	99	+        </div>
	100	+        <div id="contentwrap">
	101	+        <div id="content">
	102	+          <table width="651" border="0">
	103	+            <tr>
	104	+              <th id="tolo">HD Eksternal</th>
	105	+            </tr>
	106	+          </table>
	107	+          <div class="kategori" >
	108	+            <table width="630" border="0">
	109	+              <tr>
	110	+                <th width="91" rowspan="5" scope="col"><img src="../images/seagate1tb.jpg" width="130" height="100"></th>
	111	+                <th colspan="2" scope="col">Seagate Slim 1 Tb(HDS1)</th>
	112	+              </tr>
	113	+              <tr>
	114	+                <td width="238" height="58">Informasi Produk</td>
	115	+                <td width="287" height="58">: 1TB, 5400 RPM, USB 3.0, 2.5"</td>
	116	+              </tr>
	117	+              <tr>
	118	+                <td height="29">Harga</td>
	119	+                <td>: Rp. 1.000.000,00</td>
	120	+              </tr>
	121	+              <tr>
	122	+                <td height="29">Jumlah</td>
	123	+                <td><input type="text" class="inputboxquantity" size="4" id="quantity"  value="1"></td>
	124	+              </tr>
	125	+              <tr>
	126	+                <td height="29" colspan="2"> <button type="submit" class="beli">Beli</button></td>
	127	+              </tr>
	128	+            </table>
	129	+          </div>
	130	+          <hr width="80%" align="center">
	131	+          <div class="kategori" >
	132	+            <table width="630" border="0">
	133	+              <tr>
	134	+                <th width="91" rowspan="5" scope="col"><img src="../images/seagate5gb.jpg" width="130" height="100"></th>
	135	+                <th colspan="2" scope="col">Seagate Slim 500 Gb(HDS2)</th>
	136	+              </tr>
	137	+              <tr>
	138	+                <td width="238" height="58">Informasi Produk</td>
	139	+                <td width="287" height="58">: 500GB, 5400 RPM, USB 3.0, 2.5"</td>
	140	+              </tr>
	141	+              <tr>
	142	+                <td height="29">Harga</td>
	143	+                <td>: Rp. 1.000.000,00</td>
	144	+              </tr>
	145	+              <tr>
	146	+                <td height="29">Jumlah</td>
	147	+                <td><input type="text" class="inputboxquantity" size="4" id="quantity"  value="1"></td>
	148	+              </tr>
	149	+              <tr>
	150	+                <td height="29" colspan="2"> <button type="submit" class="beli">Beli</button></td>
	151	+              </tr>
	152	+            </table>
	153	+          </div>
	154	+          <hr width="80%" align="center">
	155	+            <div class="kategori" >
	156	+            <table width="630" border="0">
	157	+              <tr>
	158	+                <th width="91" rowspan="5" scope="col"><a href="#"><img src="../images/seagate320gb.jpg" width="130" height="100"></a></th>
	159	+                <th colspan="2" scope="col">Seagate Backup 500 Gb(HDS3)</th>
	160	+              </tr>
	161	+              <tr>
	162	+                <td width="238" height="58">Informasi Produk</td>
	163	+                <td width="287" height="58">: 500GB, 5400 RPM, USB 3.0, 2.5"</td>
	164	+              </tr>
	165	+              <tr>
	166	+                <td height="29">Harga</td>
	167	+                <td>: Rp. 1.000.000,00</td>
	168	+              </tr>
	169	+              <tr>
	170	+                <td height="29">Jumlah</td>
	171	+                <td><input type="text" class="inputboxquantity" size="4" id="quantity"  value="1"></td>
	172	+              </tr>
	173	+              <tr>
	174	+                <td height="29" colspan="2"> <button type="submit" class="beli">Beli</button></td>
	175	+              </tr>
	176	+            </table>
	177	+          </div>
	178	+          <hr width="80%" align="center">
	179	+          
	180	+            <div class="kategori" >
	181	+            <table width="630" border="0">
	182	+              <tr>
	183	+                <th width="91" rowspan="5" scope="col"><img src="../images/adata1tb.jpg" width="130" height="100"></th>
	184	+                <th colspan="2" scope="col">Adata 1Tb(HDA1)</th>
	185	+              </tr>
	186	+              <tr>
	187	+                <td width="238" height="58">Informasi Produk</td>
	188	+                <td width="287" height="58">: 1TB, 5400 RPM, USB 3.0, 2.5"</td>
	189	+              </tr>
	190	+              <tr>
	191	+                <td height="29">Harga</td>
	192	+                <td>: Rp. 1.000.000,00</td>
	193	+              </tr>
	194	+              <tr>
	195	+                <td height="29">Jumlah</td>
	196	+                <td><input type="text" class="inputboxquantity" size="4" id="quantity"  value="1"></td>
	197	+              </tr>
	198	+              <tr>
	199	+                <td height="29" colspan="2"> <button type="submit" class="beli">Beli</button></td>
	200	+              </tr>
	201	+            </table>
	202	+          </div>
	203	+          <hr width="80%" align="center">
	204	+            <div class="kategori" >
	205	+            <table width="630" border="0">
	206	+              <tr>
	207	+                <th width="91" rowspan="5" scope="col"><img src="../images/adata500gb.jpg" width="130" height="100"></th>
	208	+                <th colspan="2" scope="col">Adata 500Gb(HDA2)</th>
	209	+              </tr>
	210	+              <tr>
	211	+                <td width="238" height="58">Informasi Produk</td>
	212	+                <td width="287" height="58">: 500GB, 5400 RPM, USB 3.0, 2.5"</td>
	213	+              </tr>
	214	+              <tr>
	215	+                <td height="29">Harga</td>
	216	+                <td>: Rp. 1.000.000,00</td>
	217	+              </tr>
	218	+              <tr>
	219	+                <td height="29">Jumlah</td>
	220	+                <td><input type="text" class="inputboxquantity" size="4" id="quantity"  value="1"></td>
	221	+              </tr>
	222	+              <tr>
	223	+                <td height="29" colspan="2"> <button type="submit" class="beli">Beli</button></td>
	224	+              </tr>
	225	+            </table>
	226	+          </div>
	227	+          <hr width="80%" align="center">
	228	+            <div class="kategori" >
	229	+            <table width="630" border="0">
	230	+              <tr>
	231	+                <th width="91" rowspan="5" scope="col"><img src="../images/adata320.jpg" width="130" height="100"></th>
	232	+                <th colspan="2" scope="col">Adata 320Gb(HDA3)</th>
	233	+              </tr>
	234	+              <tr>
	235	+                <td width="238" height="58">Informasi Produk</td>
	236	+                <td width="287" height="58">: 320GB, 5400 RPM, USB 3.0, 2.5"</td>
	237	+              </tr>
	238	+              <tr>
	239	+                <td height="29">Harga</td>
	240	+                <td>: Rp. 1.000.000,00</td>
	241	+              </tr>
	242	+              <tr>
	243	+                <td height="29">Jumlah</td>
	244	+                <td><input type="text" class="inputboxquantity" size="4" id="quantity"  value="1"></td>
	245	+              </tr>
	246	+              <tr>
	247	+                <td height="29" colspan="2"> <button type="submit" class="beli">Beli</button></td>
	248	+              </tr>
	249	+            </table>
	250	+          </div>
	251	+          <hr width="80%" align="center">
	252	+          
	253	+        </div>
	254	+        </div>
	255	+        <div id="rightcolumnwrap">
	256	+        <div id="rightcolumn">
	257	+          <table>
	258	+            <thead>
	259	+              <tr>
	260	+                <th height="33" bgcolor="#00FFFF">Kontak Kami</th>
	261	+              </tr>
	262	+            </thead>
	263	+            <tbody>
	264	+              <tr>
	265	+                <td height="200"><strong>Telepon</strong><br>
	266	+                 0274-556677<br>
	267	+                  <strong>Sms</strong><br>
	268	+                  0852-5000-0000<br>
	269	+                  <strong>Pin BB</strong><br>
	270	+                  29A11110<br>
	271	+                  <strong>Whatsapp / Sms</strong><br>
	272	+                  0852-5000-0000<br>
	273	+                  <br>
	274	+                Jl Demangan Yogyakarta<p><img src="../images/facebook.png" width="60" height="60"><img src="../images/twitter.png" width="60" height="60"></p></td>
	275	+              </tr>
	276	+            </tbody>
	277	+          </table>
	278	+        </div>
	279	+        </div>
	280	+        <div id="footerwrap">
	281	+        <div id="footer">
	282	+            <p>Copyright © 2013 Dracones - Cepat & Murah Hanya Untuk Anda.        </p>
	283	+        </div>
	284	+      </div>
	285	+    </div>
	286	+</body>
	287	+</html>
