<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title>Perpustakaan</title>
	<link  href="http://localhost/ibnu/project1/include/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="http://localhost/ibnu/project1/include/bootstrap/js/bootstrap.js"></script>
	<link  href="http://localhost/ibnu/project1/include/style/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>



<div id='header' class='container'>

	<div align="right"><a href="http://localhost/ibnu/project1/logout.php" ><b><?php print $_SESSION['username']; ?></b>  logout</a></div>
		<div class="row">
			<div class="col-sm-12" style="text-align:center">
				<img style="margin-left:auto;margin-right:auto;" src='http://localhost/ibnu/project1/include/images/burger.jpg' class='img-responsive'>
			</div>
		</div>
</div>



<div id='main_menu' class='container'>
	<div class="row">
		<div class="col-sm-12">
				<ul>
					<li><a href='http://localhost/ibnu/project1/index.php'>HOME</a></li>
					<li><a href='http://localhost/ibnu/project1/buku/index.php'>BUKU</a></li>
					<li><a href='http://localhost/ibnu/project1/penulis/index.php'>PENULIS</a></li>	
					<li><a href='http://localhost/ibnu/project1/penerbit/index.php'>PENERBIT</a></li>
					<li><a href='http://localhost/ibnu/project1/kategori/index.php'>KATEGORI</a></li>
					<li><a href='http://localhost/ibnu/project1/member/index.php'>MEMBER</a></li>
				</ul>
		</div>
	</div>
</div>

