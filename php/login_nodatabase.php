<?php
// aktifkan fungsi session
session_start();
// definisi nama dan sandi
$username = 'satu';
$password = 'satu';

// logika jika user mengeklik tombol login
if (isset($_POST['username'])) {
	// cek komponen input
	if (($_POST['username'] == $username) && ($_POST['password'] == $password)) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		
		//set definisi baru
		$user = $_SESSION['username'];
		$pass = $_SESSION['password'];
		
		// user telah login . 
		echo " <a href='setelahlogin.php'> << Beranda >> </a></fieldset>";
		// logout
		echo " <a href='logout.php'> << Logout >> </a></fieldset>";
	}
	// logika kesalahan
	else {
		echo " Salah isi <br /> ";
		echo " <a href='login_nodatabase.php'> << Kembali </a>";
	}
}
else {
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="tes.css" />
</head>

<body>
	 <div id="leftcolumnwrap">
        <div id="leftcolumn">
<fieldset>
<legend>Masuk Akun</legend>
<form action="login_nodatabase.php" method="post" name="login" id="login">
  <p>Username :
    <input name="username" type="text" id="username">
</p>
  <p>Password : 
    <input name="password" type="password" id="password">
</p>
  <p>
    <input type="submit" name="Submit" value="Login">
  </p>
</form>
</fieldset>
</div>
</div>
</body>
</html>
<?php 
}
?>