<?php
	$db = mysql_connect("127.0.0.1", "root", ""); 
	if (!$db) { 
		// terminate and give error message 
		die(mysql_error()); 
	} 
	if(!mysql_select_db("project", $db))
		die(mysql_error());
?>