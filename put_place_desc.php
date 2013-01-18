<?php

	include "connect_db.php";


	$name = $_REQUEST["name"];

	$desc = $_REQUEST["desc"];

	$latitude = (double)$_REQUEST["latitude"];

	$longitude = (double)$_REQUEST["longitude"];

	$ID_user = $_REQUEST["ID_user"];


	echo $name." ".$latitude." ".$longitude." ".$ID_user." ".$desc."<br>";
	

	//$sql = "INSERT INTO places (name,descripcion,date_creation,latitude,longitude,ID_user) VALUES ('".$name."','".$desc."',CURRENT_TIMESTAMP,".$latitude.",".$longitude.",".$ID_user.")";

	$r = mysql_query("INSERT INTO places (name, descripcion,date_creation,latitude,longitude,ID_user) VALUES ('".$name."','".$desc."',CURRENT_TIMESTAMP,".$latitude.",".$longitude.",".$ID_user.")");

	echo mysql_error();

	mysql_close();

?>