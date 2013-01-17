<?php
$telef=$_REQUEST["telefono"];
$nick=$_REQUEST["nick"];
$cont = mysql_connect("localhost","s1283f8a_findMe","findMe");

if(!$cont){
	die("Could no conect: ".mysql_error());
}
mysql_select_db("s1283f8a_findMe");
$r = mysql_query("INSERT INTO Contacts (phone,nick) VALUES (".$telef.",'".$nick."')");
echo var_dump($r);
mysql_close();

?>