<?php
$name = $_REQUEST["name"];
$latitude = (double)$_REQUEST["latitude"];
$longitude = (double)$_REQUEST["longitude"];
$ID_user = $_REQUEST["ID_user"];

$cont = mysql_connect("localhost","s1283f8a_findMe","findMe");

if(!$cont){
	die("Could no conect: ".mysql_error());
}
mysql_select_db("s1283f8a_findMe");

mysql_query("INSERT INTO places (name,date_creation,latitude,longitude,ID_user) VALUES ('".$name."',CURRENT_TIMESTAMP,".$latitude.",".$longitude.",".$ID_user.")");

mysql_close();
?>