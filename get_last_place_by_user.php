<?php
$ID_user=$_REQUEST["ID_user"];
$cont = mysql_connect("localhost","s1283f8a_findMe","findMe");

if(!$cont){
	die("Could no conect: ".mysql_error());
}
mysql_select_db("s1283f8a_findMe");

$q=mysql_query("SELECT * FROM places WHERE ID_user = ".$ID_user." order by date_creation DESC limit 1");

while($e=mysql_fetch_assoc($q))

   $output[]=$e;

print(json_encode($output));

mysql_close();

?>