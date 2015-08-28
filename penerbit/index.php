<?php include "../layout/header.php" ?>

<?php 
$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpust",$conn);
$sql_1 = mysql_query("SELECT `id`,`nama` FROM `penerbit`");
?>


<div id="content" class="container">
	<div class="row">
		<div id="main_content" class="col-sm-9">
			<h2>Data penerbit</h2>
					
			<a href="input.php" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Penerbit
			</a>

			<div>&nbsp;</div>

			<table class="table table-hover table-bordered"> 
				<tr>
						<th>no</th>
						<th>nama</th>
						<th>alamat</th>
						<th>telepon</th>
						<th>option</th>
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpust"); 
						$sql="select * from penerbit"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>
					<tr>
						<td><?php print $no; ?></td>
						<td><?php print $data['nama']; ?></td>
						<td><?php print $data['alamat']; ?></td>
						<td><?php print $data['telepon']; ?></td>
						<td>
							<a href="view.php?id=<?php print $data['id']; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="update.php?id=<?php print $data['id']; ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
							<a href="delete.php?id=<?php print $data['id']; ?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="glyphicon glyphicon-trash"></i></a>

						</td>
					</tr>	
					<?php $no++; } ?>
			</table>
		</div><!-- #main_content -->
		
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div><!-- .row -->
</div><!-- #content -->

<?php include "../layout/footer.php";	?>

			