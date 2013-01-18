<?php

	include "connect_db.php";


	$ID_user = $_REQUEST["ID_user"];


	$q = mysql_query("SELECT * FROM Contacts WHERE ID_user = ".$ID_user."");


	while($e = mysql_fetch_assoc($q))

    	$output[] = $e;

	print(json_encode($output));


	mysql_close();

?>