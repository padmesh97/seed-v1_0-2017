<?php

error_reporting(0);

$conn=mysql_connect('localhost','id450961_user1','8765513361S')
or die("Cannot Connect to the MySQL server");
	
mysql_select_db("id450961_elect")
or die("Can't connect to the specified database");

$data=mysql_query("SELECT * FROM registration_op")
or die("Can't Connect to the specified Table");


?>



