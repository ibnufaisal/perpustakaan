<?php include "../layout/header.php" ?>

	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-9">
					<h2>Data Peminjam</h2>
					
					<a href="input.php" class="btn btn-primary">
							<i class="glyphicon glyphicon-plus"></i>
							Tambah Peminjam
					</a>

					<div>&nbsp;</div>

					<table class="table table-hover table-bordered"> 
					<tr>
						<th>No</th>
						<th>id_buku</th>
						<th>username</th>
						<th>tanggal_peminjaman</th>
						<th>lama_peminjaman</th>
						<th>tanggal_pengembalian</th>
						<th>status_kembali</th>
						<th>option</th>
					
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpust"); 
						$sql="select p.*, b.* from peminjaman p join buku b where p.id_buku=b.id"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>

					<tr>
						<td><?php print $no; ?></td>
						<td><?php print $data['judul']; ?></td>
						<td><?php print $data['username']; ?></td>
						<td><?php print $data['tanggal_peminjaman']; ?></td>
						<td><?php print $data['lama_peminjaman']; ?></td>
						<td><?php print $data['tanggal_pengembalian']; ?></td>
						<td><?php print $data['status_kembali']; ?></td>

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
	</div><!-- #content -->

<?php include "../layout/footer.php";	?>
