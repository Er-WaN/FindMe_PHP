<?php

	include "connect_db.php";


	$telef = $_REQUEST["telefono"];

	$nick = $_REQUEST["nick"];
	

	$r = mysql_query("INSERT INTO Contacts (phone, nick) VALUES (".$telef.",'".$nick."')") or die(mysql_error()); 

	echo var_dump($r);

	mysql_close();


?>