<?php
$conn=mysql_connect("localhost","root",""); 
mysql_select_db("perpust"); 
$sql="DELETE FROM penerbit WHERE id = ".$_GET['id']; 
$hasil=mysql_query($sql,$conn); 

header("location:index.php"); 

?>