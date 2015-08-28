<?php
		include "../include/conn.php";

		$username = $_POST ['username'];
		$password = $_POST ['password'];

		
	
	if (trim($username)=="") {
	echo "mohon di isi";
	}
	elseif (trim($password)=="") {
	echo "password Masih Kosong,ulangi kembali";
	}
	else {
	$sql = "INSERT INTO user SET
			
			username = '$username',
			password = '$password'";
	
		
		mysql_query($sql, $koneksi)
			or die ("SQL Error : ".mysql_error());
			echo "Berhasil Menyimpan Baru : <b>$username</b>";
			
	}
?>


<!doctype html>
	<head>
			<title>login user</title>
			<link  href="http://localhost/ibnu/project1/include/style/style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
		<body>
				<div id='header' class='container'>
					<div align="right"><a href="../login.php" >Goback</a></div>
						<div class="row">
							<div class="col-sm-12" style="text-align:center">
								<img style="margin-left:auto;margin-right:auto;" src='http://localhost/ibnu/project1/include/images/burger.jpg' class='img-responsive'>
							</div>
						</div>
				</div>

				<div align="center">
						<form action="" method="post" name="form1" target="_self" id="form1">
						 <div>
						  		<p>&nbsp;</p>
						  	</div>

						  	<div class="form-group">
				    				<label>username</label>
				    				<input type="text" class="form-control" id="username" name="username">
				  			</div>
							<div class="form-group">
				    				<label>password</label>
				    				<input type="text" class="form-control" id="password" name="password">
				  			</div>
							
							<div class="form-actions well">
  									<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i>tambah</button>
		  					</div>

						  
						  <p>&nbsp;</p>
						</form>
				</div>	
		</body>
</html>
