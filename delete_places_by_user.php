<?php

	include "connect_db.php";

	$ID_user = $_REQUEST["ID_user"];

	$q = mysql_query("DELETE FROM places WHERE ID_user=".$ID_user."");

	echo mysql_error();

	mysql_close();

?>