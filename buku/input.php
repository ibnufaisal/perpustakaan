
<?php
		include "../include/conn.php";

		
		$judul = $_POST ['judul'];
		$isbn = $_POST ['isbn'];
		$sinopsis = $_POST ['sinopsis'];
		$sampul = $_POST ['sampul'];
		$id_kategori = $_POST ['id_kategori'];
		$id_penulis = $_POST ['id_penulis'];
		$id_penerbit = $_POST ['id_penerbit'];
		
	
	if (trim($judul)=="") {
	echo "mohon di isi";
	}
	elseif (trim($isbn)=="") {
	echo "isbn Masih Kosong,Ulangi Kembali";
	}
	elseif (trim($sinopsis)=="") {
	echo "sinopsis Masih Kosong,ulangi kembali";
	}
	elseif (trim($sampul)=="") {
	echo "sampul Masih Kosong,Ulangi Kembali";
	}
	elseif (trim($id_kategori)=="") {
	echo "kategori Masih Kosong,ulangi kembali";
	}
	elseif (trim($id_penulis)=="") {
	echo "penulis Masih Kosong,ulangi kembali";
	}
	elseif (trim($id_penerbit)=="") {
	echo "penerbit Masih Kosong,ulangi kembali";
	}
	else {
	$sql = "INSERT INTO buku SET
			
			judul = '$judul',
			isbn = '$isbn',
			sinopsis = '$sinopsis',
			sampul = '$sampul',
			id_kategori = '$id_kategori',
			id_penulis = '$id_penulis',
			id_penerbit = '$id_penerbit'";
	
		
		mysql_query($sql, $koneksi)
			or die ("SQL Error : ".mysql_error());
			echo "Berhasil Menyimpan judul Baru : <b>$judul</b>";
			
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
		<form action="" method="post" name="form1" target="_self" id="form1">
		 
		<div class="form-group">
    				<label>judul</label>
    				<input type="text" class="form-control" id="judul" name="judul">
  		</div>
  	    <div class="form-group">
    				<label>isbn</label>
    				<input type="text" class="form-control" id="isbn" name="isbn">
  		</div>
  		<div class="form-group">
    				<label>sinopsis</label>
    				<input type="text" class="form-control" id="sinopsis" name="sinopsis">
  		</div>
  		<div class="form-group">
    				<label>sampul</label>
    				<input type="text" class="form-control" id="sampul" name="sampul">
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
  			</div>
		  <p>&nbsp;</p>
		</form>
</div>	

