<?php
error_reporting(E_ALL); 
session_start();


 

if (isset($_POST['username'])) 
{
	if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
	}
	else
	{ 

	//include "include/conn.php";
		

		$db_host="localhost";
		$db_user="root";
		$db_pass="";
		$db_data="perpust";


		$koneksi=mysql_connect($db_host, $db_user, $db_pass) or die ("koneksi gagal".mysql_error());
		mysql_select_db($db_data, $koneksi) or die ("baca DB gagal".mysql_error());
		
	

		$username=$_POST['username'];
		$password=$_POST['password'];
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$query = "select * from user where password='$password' AND username='$username'";
		$hasil = mysql_query($query) or die(mysql_error());

		$rows = mysql_num_rows($hasil);
		if ($rows == 1) {
			$_SESSION['login']=1;
			$_SESSION['username'] = $username;		
			header("location: index.php");
		} else {
			print "<script>
					alert(\"Gagal\");	
				</script>";
		}
		mysql_close($koneksi);
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Login</title>
</head>

<body>
<fieldset>
<legend>Login</legend>
<form action="login.php" method="post" name="login" id="login">
<p>Username :
<input name="username" type="text" id="username" placeholder="Enter Username">
</p>
<p>Password :
<input name="password" type="password" id="password" placeholder="*******">
</p>
<a href="user/input.php">add account </a>
<p>
<input type="submit" name="Submit" value="Login">
</p>
</form>
</fieldset>
</body>
</html>