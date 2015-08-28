<?php

//error_reporting(E_ALL);

if(isset($_POST['id'])){
header("location: index.php");
include "../include/conn.php";

	$id = $_POST ['id'];
	$nama = $_POST ['nama'];
		
	$sql = mysql_query("UPDATE kategori SET
				
				nama = '".$nama."'
				
				WHERE id ='".$id."';") or die(mysql_error());
				
	print $id;
	print $nama;
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
						$sql="select * from kategori WHERE id = ".$_GET['id']; 
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
		  
	   	    <div class="form-group">
    				<label>kategori</label>
    				<input type="text" class="form-control" id="kategori" name="kategori" value="<?php print $kategori; ?>">
  			</div>

		    <div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> tambah</button>
  					<input name="proses" type="hidden" value="1">
					<input name="id" type="hidden" value="<?php print $_GET['id']; ?>">
  			</div>
			
			
			
			
		  <p>&nbsp;</p>
		</form>

</div>