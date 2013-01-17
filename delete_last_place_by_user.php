<?php
$ID_user=$_REQUEST["ID_user"];

$cont = mysql_connect("localhost","s1283f8a_findMe","findMe");

if(!$cont){
	die("Could no conect: ".mysql_error());
}
mysql_select_db("s1283f8a_findMe");
$sql = "DELETE FROM places WHERE ID_user=".$ID_user." order by date_creation DESC limit 1";
$q=mysql_query($sql);
echo mysql_error();

mysql_close();

?>