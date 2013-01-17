<?php
$name = $_REQUEST["name"];
$desc = $_REQUEST["desc"];
$latitude = (double)$_REQUEST["latitude"];
$longitude = (double)$_REQUEST["longitude"];
$ID_user = $_REQUEST["ID_user"];
$cont = mysql_connect("localhost","s1283f8a_findMe","findMe");

if(!$cont){
	die("Could no conect: ".mysql_error());
}
echo $name." ".$latitude." ".$longitude." ".$ID_user." ".$desc."<br>";
$cont = mysql_connect("localhost","s1283f8a_findMe","findMe");

mysql_select_db("s1283f8a_findMe");
//$sql = "INSERT INTO places (name,descripcion,date_creation,latitude,longitude,ID_user) VALUES ('".$name."','".$desc."',CURRENT_TIMESTAMP,".$latitude.",".$longitude.",".$ID_user.")";
$r = mysql_query("INSERT INTO places (name, descripcion,date_creation,latitude,longitude,ID_user) VALUES ('".$name."','".$desc."',CURRENT_TIMESTAMP,".$latitude.",".$longitude.",".$ID_user.")");
echo mysql_error();
mysql_close();
?>