<?php

	include "connect_db.php";


	$telef = $_REQUEST["telefono"];


	$q = mysql_query("SELECT * FROM Contacts WHERE phone = ".$telef."");


	while($e = mysql_fetch_assoc($q))

   		$output[] = $e;


	print(json_encode($output));


	mysql_close();

?>