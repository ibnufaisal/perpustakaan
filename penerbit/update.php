<?php

//error_reporting(E_ALL);

if(isset($_POST['id'])){
header("location: index.php");
include "../include/conn.php";

	$id = $_POST ['id'];
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$telepon = $_POST ['telepon'];

	$sql = mysql_query("UPDATE penerbit SET
				
				nama = '".$nama."',
				alamat = '".$alamat."',
				telepon = '".$telepon."'
				
				WHERE id ='".$id."';") or die(mysql_error());

	print $id;
	print $nama;
	print $alamat;
	print $telepon;
	///header("location: ../form/update.php?id_buku=".$id_buku);
}
?>



<?php include "../layout/header.php" ?>
<div align="center">
		<form action="" method="post" >
		  
					<?php
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpust"); 
						$id = $_GET['id'];
						$sql="select * from penerbit WHERE id = ".$_GET['id']; 
						$hasil=mysql_query($sql,$conn); 

					?>

					<?php 
						$judul = "";
						while($data = mysql_fetch_array($hasil)) {
							$nama = $data['nama'];
							$alamat = $data['alamat'];
							$telepon = $data['telepon']; 

						}
					?>
		  <div>
		  		<p>&nbsp;</p>
		  	</div>

		  	<div class="form-group">
    				<label>nama</label>
    				<input type="text" class="form-control" id="nama" name="nama" value="<?php print $nama; ?>">
  			</div>
			<div class="form-group">
    				<label>alamat</label>
    				<input type="text" class="form-control" id="alamat" name="alamat" value="<?php print $alamat; ?>">
  			</div>
			<div class="form-group">
    				<label>telepon</label>
    				<input type="text" class="form-control" id="telepon" name="telepon" value="<?php print $telepon; ?>">
  			</div>
			
			<div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> tambah</button>
  					<input name="proses" type="hidden" value="1">
	       		    <input name="id" type="hidden" value="<?php print $_GET['id']; ?>">
  			
		  
		  <p>&nbsp;</p>
		</form>

</div>