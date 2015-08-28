<?php
session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:login.php");
    }
?>
<?php
		include "../include/conn.php";
		
		$username = $_POST ['username'];
		$tanggal_peminjaman = $_POST ['tanggal_peminjaman'];
		$lama_peminjaman = $_POST ['lama_peminjaman'];
		$tanggal_pengembalian = $_POST ['tanggal_pengembalian'];
		$status_kembali = $_POST ['status_kembali'];
		$id_buku = $_POST ['id_buku'];

		
	
	if (trim($username)=="") {
	echo "mohon di isi";
	}
	elseif (trim($tanggal_peminjaman)=="") {
	echo "tanggal_peminjaman Masih Kosong,ulangi kembali";
	}
	elseif (trim($lama_peminjaman)=="") {
	echo "lama_peminjaman Masih Kosong,Ulangi Kembali";
	}
	elseif (trim($tanggal_pengembalian)=="") {
	echo "tanggal_pengembalian Masih Kosong,ulangi kembali";
	}
	elseif (trim($status_kembali)=="") {
	echo "status_kembali Masih Kosong,ulangi kembali";
	}
	else {
	$sql = "INSERT INTO peminjaman SET
			
			
			username = '$username',
			id_buku = '$id_buku',
			tanggal_peminjaman = '$tanggal_peminjaman',
			lama_peminjaman = '$lama_peminjaman',
			tanggal_pengembalian = '$tanggal_pengembalian',
			status_kembali = '$status_kembali'";
	
		
		mysql_query($sql, $koneksi)
			or die ("SQL Error : ".mysql_error());
			echo "Berhasil Menyimpan Baru : <b>$username</b>";
			
	}
?>

<?php
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpust",$conn);
		$sql_1 = mysql_query("SELECT * FROM `buku`");
?>

<?php include "../layout/header.php" ?>

<div align="center">
		<form action="" method="post" name="form1" target="_self" id="form1">
		  	
		   	<div>
		  		<p>&nbsp;</p>
		  	</div>
		   <div>
			  <td colspan="2"><div align="center">Tentang Peminjaman</div></td>
			</div>
		   	<div>
		  		<p>&nbsp;</p>
		  	</div>		
						<div class="form-group">
    						<label>id_buku</label>
								<select name="id_buku" id="id" class="form-control">
									<option>--pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_1)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'> ".$view_1['judul']."
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
    				<label>username</label>
					<input name="username" class="form-control" type="text" id="username" value="<?php print $_SESSION['username'] ?>" size="30" maxlength="100"  />
			</div>
			</tr>
			<div class="form-group">
    				<label>tanggal_peminjaman</label>
    				<input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
  			</div>
			<div class="form-group">
    				<label>lama_peminjaman</label>
    				<input type="text" class="form-control" id="lama_peminjaman" name="lama_peminjaman">
  			</div>
			<div class="form-group">
    				<label>tanggal_pengembalian</label>
    				<input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian">
  			</div>
			<div class="form-group">
    				<label>status_kembali</label>
    				<input type="text" class="form-control" id="status_kembali" name="status_kembali">
  			</div>
			
			<div class="form-actions well">
  					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> tambah</button>
  			</div>
			
		 
		  
		  <p>&nbsp;</p>
		</form>
</div>	

