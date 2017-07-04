<?php
	mysql_connect('localhost','root','on73057080') or die("Unable to connect to SQL server");
	mysql_select_db("ondb") or die("Unable to select database");
	
	mysql_query("set session character_set_connection=utf8;");

	mysql_query("set session character_set_results=utf8;");

	mysql_query("set session character_set_client=utf8;");


?>