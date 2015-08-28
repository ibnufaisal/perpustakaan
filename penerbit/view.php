
<?php include "../layout/header.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-9">
				<?php 
				$conn=mysql_connect("localhost","root",""); 
				mysql_select_db("perpust"); 
				$id = $_GET['id'];
				$sql="select * from penerbit WHERE id = ".$_GET['id']; 
				$hasil=mysql_query($sql,$conn);
				?>
				<?php while($data = mysql_fetch_array($hasil)) { ?>
			
				<div id="view-penerbit">
						
						<table class="table">
						<tr>
							<th><h4>DETAIL PENERBIT</h4></th>
						<tr>
						<tr>
							<th width="10%">nama</th>
							<td width="90%">: <?php print $data['nama']; ?></td>
						</tr>
						<tr>
							<th>alamat</th>
							<td>: <?php print $data['alamat']; ?></td>
						</tr>
						<tr>
							<th>telepon</th>
							<td>: <?php print $data['telepon']; ?></td>
						</tr>
						</table>
					</div>
				<?php } ?>
			
				<h2>Daftar Buku</h2>
				<?php $id = $_GET['id']; ?>
				<?php $sql = "SELECT * FROM buku WHERE id_penerbit = '$id'"; ?>
				<?php $dataBuku = mysql_query($sql); ?>
				<table class="table">
				<tr>	
					<th width="10%">No</th>
					<th width="90%">Judul</th>
				</tr>
				<?php $no = 1; ?>
				<?php while($data = mysql_fetch_array($dataBuku)) { ?>
				<tr>
					<td><?php print $no; ?></td>
					<td><a href="../buku/view.php?id=<?php print $data['id']; ?>"><?php print $data['judul']; ?></td>
				</tr>
				<?php $no++; } ?>
				</table>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>
