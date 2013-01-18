<?php

	$cont = mysql_connect("db451252624.db.1and1.com","dbo451252624","polspe24dio1") or die(mysql_error()); 

	if(!$cont)
	{

		die("Could no connect: ".mysql_error());

	}

	mysql_select_db("db451252624") or die(mysql_error()); 

?>