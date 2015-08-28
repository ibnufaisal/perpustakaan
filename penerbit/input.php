<?php
		include "../include/conn.php";
		
		
		$nama = $_POST ['nama'];
		$alamat = $_POST ['alamat'];
		$telepon = $_POST ['telepon'];	
	
	if (trim($nama)=="") {
	echo "mohon di isi";
	}
	elseif (trim($alamat)=="") {
	echo "alamat Masih Kosong,Ulangi Kembali";
	}
	elseif (trim($telepon)=="") {
	echo "telepon Masih Kosong,ulangi kembali";
	}
	else {
	$sql = "INSERT INTO penerbit SET
			
			nama = '$nama',
			alamat = '$alamat',
			telepon = '$telepon'";
	
		
		mysql_query($sql, $koneksi)
			or die ("SQL Error : ".mysql_error());
			echo "Berhasil Menyimpan judul Baru : <b>$nama</b>";
			
	}
?>



<?php include "../layout/header.php" ?>

<div align="center">
		<form action="" method="post" name="form1" target="_self" id="form1">

		  	<div>
		  		<p>&nbsp;</p>
		  	</div>

		  	<div class="form-group">
    				<label>nama</label>
    				<input type="text" class="form-control" id="nama" name="nama">
  			</div>
			<div class="form-group">
    				<label>alamat</label>
    				<input type="text" class="form-control" id="alamat" name="alamat">
  			</div>
			<div class="form-group">
    				<label>telepon</label>
    				<input type="text" class="form-control" id="telepon" name="telepon">
  			</div>
			
			<div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> tambah</button>
  			</div>

		  <p>&nbsp;</p>
		</form>
</div>	
