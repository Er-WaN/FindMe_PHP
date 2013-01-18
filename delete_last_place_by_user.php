<?php

	include "connect_db.php";

	$ID_user = $_REQUEST["ID_user"];

	$sql = "DELETE FROM places WHERE ID_user = ".$ID_user." order by date_creation DESC limit 1";

	$q = mysql_query($sql);

	echo mysql_error();

	mysql_close();

?>