<?php

include 'conn.php';

function getNamaKategori($id_kategori) {
	

	$sql_kategori="select nama from kategori where id='".$id_kategori."'"; 
				
	$hasil_kategori = mysql_query($sql_kategori);
					
	$data_kategori = mysql_fetch_array($hasil_kategori);

	return $data_kategori['nama'];

}

function getNamaPenulis($id) {
	

	$sql="select nama from penulis where id='".$id."'"; 
				
	$hasil = mysql_query($sql);
					
	$data = mysql_fetch_array($hasil);

	return $data['nama'];

}

function getNamaPenerbit($id) {
	

	$sql="select nama from penerbit where id='".$id."'"; 
				
	$hasil = mysql_query($sql);
					
	$data = mysql_fetch_array($hasil);

	return $data['nama'];

}

