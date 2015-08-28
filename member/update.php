<?php

//error_reporting(E_ALL);

if(isset($_POST['id'])){
header("location: index.php");
include "../include/conn.php";

					$id = $_POST ['id'];
					$id_buku = $_POST ['id_buku'];
					$username = $_POST ['username'];
					$tanggal_peminjaman = $_POST ['tanggal_peminjaman'];
					$lama_peminjaman = $_POST ['lama_peminjaman'];
					$tanggal_pengembalian = $_POST ['tanggal_pengembalian'];
					$status_kembali = $_POST ['status_kembali'];
				
				$sql = mysql_query("UPDATE peminjaman SET
							
			id	= '".$id."',		
			id_buku = '".$id_buku."',
			username = '".$username."',
			tanggal_peminjaman = '".$tanggal_peminjaman."',
			lama_peminjaman = '".$lama_peminjaman."',
			tanggal_pengembalian = '".$tanggal_pengembalian."',
			status_kembali = '".$status_kembali."'
							
							WHERE id ='".$id."';") or die(mysql_error());
							
			print $id;
			print $id_buku;
			print $username;
			print $tanggal_peminjaman;
			print $lama_peminjaman;
			print $tanggal_pengembalian;
			print $status_kembali;
						///header("location: ../form/update.php?id_buku=".$id_buku);
	}
?>






<?php include "../layout/header.php" ?>
<div align="center">
		<form action="" method="post" >
		  
					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpust"); 
						$sql="select p.*, b.* from peminjaman p join buku b where p.id_buku=b.id"; 
						$hasil=mysql_query($sql,$conn); 
					?>

					<?php 
						$id_buku = "";
						while($data = mysql_fetch_array($hasil)) {
							$id_buku = $data['judul'];
							$username = $data['username'];
							$tanggal_peminjaman = $data['tanggal_peminjaman'];
							$lama_peminjaman = $data['lama_peminjaman'];
							$tanggal_pengembalian = $data['tanggal_pengembalian'];							 
							$status_kembali = $data['status_kembali'];
						}
					?>
		  
		    <div>
		  		<p>&nbsp;</p>
		  	</div>

			<div class="form-group">
    				<label>id_buku</label>
    				<input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php print $id_buku; ?>">		  	

		  	<div class="form-group">
    				<label>nama</label>
    				<input type="text" class="form-control" id="username" name="username" value="<?php print $username; ?>">
  			</div>
			<div class="form-group">
    				<label>tanggal_peminjaman</label>
    				<input type="text" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?php print $tanggal_peminjaman; ?>">
  			</div>
			<div class="form-group">
    				<label>lama_peminjaman</label>
    				<input type="text" class="form-control" id="lama_peminjaman" name="lama_peminjaman" value="<?php print $lama_peminjaman; ?>">
  			</div>
  			<div class="form-group">
    				<label>tanggal_pengembalian</label>
    				<input type="text" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?php print $tanggal_pengembalian; ?>">
  			</div>
  			<div class="form-group">
    				<label>status_kembali</label>
    				<input type="text" class="form-control" id="status_kembali" name="status_kembali" value="<?php print $tanggal_pengembalian; ?>">
  			</div>

			
			<div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> tambah</button>
  					<input name="proses" type="hidden" value="1">
	       		    <input name="id" type="hidden" value="<?php print $_GET['id']; ?>">
  			</div>
			
	
		  <p>&nbsp;</p>
		</form>

</div>
