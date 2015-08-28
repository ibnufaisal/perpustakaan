
<?php
//error_reporting(E_ALL);
		include "../include/conn.php";
		
		
		$nama = $_POST ['nama'];
		
	
	if (trim($nama)=="") {
	echo "mohon di isi";
	}
	else {
	$sql = "INSERT INTO kategori SET
			
			nama = '$nama'";
	
		
		mysql_query($sql, $koneksi)
			or die ("SQL Error : ".mysql_error());
			echo "Berhasil Menyimpan judul Baru : <b>$nama</b>";
			
	}
?>



<?php include "../layout/header.php" ?>

<div align="center">
		<form action="" method="post" name="form1" target="_self" id="form1">
		  	
		  	<div class="form-group">
    				<label>kategori</label>
    				<input type="text" class="form-control" id="kategori" name="kategori">
  			</div>

		    <div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> tambah</button>
  			</div>
		  <p>&nbsp;</p>
		</form>
</div>	
