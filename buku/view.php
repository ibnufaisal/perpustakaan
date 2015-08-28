<?php include "../include/fungsi.php"; ?>
<?php include "../layout/header.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<?php 
				$conn=mysql_connect("localhost","root",""); 
				mysql_select_db("perpust"); 
				$id = $_GET['id'];
				$sql="select * from buku WHERE id = ".$_GET['id']; 
				$hasil=mysql_query($sql,$conn);
				?>
				<?php while($data = mysql_fetch_array($hasil)) { ?>
			<div id="view-buku">

				<table class="table">
				<tr>
					<th><h4>DETAIL BUKU</h4></th>
				<tr>
					<th width="20%">JUDUL</th>
					<td width="80%">: <?php print $data['judul']; ?></td>
				</tr>
				<tr>
					<th>ISBN</th>
					<td>: <?php print $data['isbn']; ?></td>
				</tr>
				<tr>
					<th>SINOPSIS</th>
					<td>: <?php print $data['sinopsis']; ?></td>
				</tr>
				<tr>
					<th>KATEGORI</th>
					<td>: <?php print getNamaKategori($data['id_kategori']); ?></td>
				</tr>
				<tr>
					<th>PENULIS</th>
					<td>: <?php print getNamaPenulis($data['id_penulis']); ?></td>
				</tr>
				<tr>
					<th>PENERBIT</th>
					<td>: <?php print getNamaPenerbit($data['id_penerbit']); ?></td>
				</tr>
				</table>
			</div>

				<?php } ?>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>
