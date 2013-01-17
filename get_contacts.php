<?php

$cont = mysql_connect("localhost","s1283f8a_findMe","findMe");

if(!$cont){
	die("Could no conect: ".mysql_error());
}
mysql_select_db("s1283f8a_findMe");

$q=mysql_query("SELECT * FROM Contacts");

while($e=mysql_fetch_assoc($q))

   $output[]=$e;

print(json_encode($output));

mysql_close();

?>