<?PHP

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_data="perpust";


$koneksi=mysql_connect($db_host, $db_user, $db_pass)
		or die ("koneksi gagal".mysql_error());
		mysql_select_db($db_data, $koneksi)
		or die ("baca DB gagal".mysql_error())
		
?>		
