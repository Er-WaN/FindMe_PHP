<?php

	include "connect_db.php";


	$ID_user = $_REQUEST["ID_user"];


	$q = mysql_query("SELECT * FROM places WHERE ID_user = ".$ID_user." order by date_creation DESC limit 1");


	while($e = mysql_fetch_assoc($q))

	   $output[] = $e;


	print(json_encode($output));


	mysql_close();

?>