<?php

//error_reporting(E_ALL);
if(isset($_POST['id'])){
header("location: index.php");
include "../include/conn.php";

	$id = $_POST ['id'];
	$judul = $_POST ['judul'];
	$isbn = $_POST ['isbn'];
	$sinopsis = $_POST ['sinopsis'];
	$sampul = $_POST ['sampul'];
	$id_kategori = $_POST ['id_kategori'];
	$id_penulis = $_POST ['id_penulis'];
	$id_penerbit = $_POST ['id_penerbit'];
	$sql = mysql_query("UPDATE buku SET
				
				judul = '".$judul."',
				isbn = '".$isbn."',
				sinopsis = '".$sinopsis."',
				sampul = '".$sampul."',
				id_kategori = '$id_kategori',
				id_penulis = '$id_penulis',
				id_penerbit = '$id_penerbit'
				WHERE id ='".$id."';") or die(mysql_error());

	print $id;
	print $judul;
	print $isbn;
	print $sinopsis;
	print $sampul;
	print $id_kategori;
	print $id_penulis;
	print $id_penerbit;
	///header("location: ../form/update.php?id_buku=".$id_buku);
}
?>

<?php
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpust",$conn);
		$sql_1 = mysql_query("SELECT `id`,`nama` FROM `penulis`");
		$sql_2 = mysql_query("SELECT `id`,`nama` FROM `penerbit`");
		$sql_3 = mysql_query("SELECT `id`,`nama` FROM `kategori`");
?>

<?php include "../layout/header.php" ?>
<div align="center">
		<form action="" method="post" >
		  
					<?php
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpust"); 
						$id = $_GET['id'];
						$sql="select * from buku WHERE id = ".$_GET['id']; 
						$hasil=mysql_query($sql,$conn); 

					?>

					<?php 
						$judul = "";
						while($data = mysql_fetch_array($hasil)) {
							$judul = $data['judul'];
							$isbn = $data['isbn'];
							$sinopsis = $data['sinopsis']; 
							$sampul = $data['sampul'];
							$id_kategori = $data['id_kategori'];
							$id_penulis = $data['id_penulis'];
							$id_penerbit = $data['id_penerbit'];
						}
					?>
		  
		  	
	 	<div>
	  		<p>Tentang Buku</p>
	  	</div>

		  <div class="form-group">
    				<label>judul</label>
    				<input type="text" class="form-control" id="judul" name="judul" value="<?php print $judul; ?>">
  		</div>
  	    <div class="form-group">
    				<label>isbn</label>
    				<input type="text" class="form-control" id="isbn" name="isbn" value="<?php print $isbn; ?>">
  		</div>
  		<div class="form-group">
    				<label>sinopsis</label>
    				<input type="text" class="form-control" id="sinopsis" name="sinopsis" value="<?php print $sinopsis; ?>">
  		</div>
  		<div class="form-group">
    				<label>sampul</label>
    				<input type="text" class="form-control" id="sampul" name="sampul" value="<?php print $sampul ?>">
  		</div>


			<div class="form-group">
				<label>kategori</label>
								<select name="id_kategori" id="id_kategori" class="form-control" >
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_3)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
			</div>				
			
			<div class="form-group">
				<label>penulis</label>
								<select name="id_penulis" id="id_penulis" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_1)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
			</div>
			<div class="form-group">
				<label>penerbit</label>
								<select name="id_penerbit" id="id_penerbit" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_2)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
			</div>
		
			<div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i>tambah</button>
  					<input name="proses" type="hidden" value="1">
	   			    <input name="id" type="hidden" value="<?php print $_GET['id']; ?>">		
  			</div>
			
		 
		  
		  <p>&nbsp;</p>
		</form>

</div>

