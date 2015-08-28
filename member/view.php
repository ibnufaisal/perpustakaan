<?php include "../include/fungsi.php"; ?>
<?php include "../layout/header.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				
					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpust"); 
						$sql="select p.*, b.* from peminjaman p join buku b where p.id_buku=b.id"; 
						$hasil=mysql_query($sql,$conn); 
					?>

				<?php while($data = mysql_fetch_array($hasil)) { ?>
			<div id="view-buku">

				<table class="table">
				<tr>
					<th><h4>DETAIL PEMINJAM</h4></th>
				<tr>
					<th width="20%">id_buku</th>
					<td width="80%">: <?php print $data['judul']; ?></td>
				</tr>
				<tr>
					<th>username</th>
					<td>: <?php print $data['username']; ?></td>
				</tr>
				<tr>
					<th>tanggal_peminjaman</th>
					<td>: <?php print $data['tanggal_peminjaman']; ?></td>
				</tr>
				<tr>
					<th>tanggal_peminjaman</th>
					<td>: <?php print $data['tanggal_peminjaman']; ?></td>
				</tr>
				<tr>
					<th>lama_peminjaman</th>
					<td>: <?php print $data['lama_peminjaman']; ?></td>
				</tr>
				<tr>
					<th>tanggal_pengembalian</th>
					<td>: <?php print $data['tanggal_pengembalian']; ?></td>
				</tr>
				<tr>
					<th>status_kembali</th>
					<td>: <?php print $data['status_kembali']; ?></td>
				</tr>
				</table>
			</div>

				<?php } ?>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>
