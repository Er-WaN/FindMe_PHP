<?php

	include "connect_db.php";


	$q = mysql_query("SELECT * FROM places");


	while($e = mysql_fetch_assoc($q))

   		$output[] = $e;

	print(json_encode($output));


	mysql_close();

?>