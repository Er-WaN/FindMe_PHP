<?php

	include "connect_db.php";


	$name = $_REQUEST["name"];

	$latitude = (double)$_REQUEST["latitude"];

	$longitude = (double)$_REQUEST["longitude"];

	$ID_user = $_REQUEST["ID_user"];
	

	mysql_query("INSERT INTO places (name,date_creation,latitude,longitude,ID_user) VALUES ('".$name."',CURRENT_TIMESTAMP,".$latitude.",".$longitude.",".$ID_user.")");

	mysql_close();

?>