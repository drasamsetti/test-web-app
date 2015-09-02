<?php
$DB_PORT_3306_TCP_ADDR 	=  $_ENV["DB_PORT_3306_TCP_ADDR"];	/*Docker DB container IP address*/
$DB_ENV_MYSQL_USER 	=  $_ENV["DB_ENV_MYSQL_USER"];		/*Mysql DB User*/
$DB_ENV_MYSQL_PASS 	=  $_ENV["DB_ENV_MYSQL_PASS"];		/*Mysql DB password*/
$DB_ENV_ON_CREATE_DB 	=  $_ENV["DB_ENV_ON_CREATE_DB"];	/*Mysql Database Name*/

	$conn=mysql_connect("$DB_PORT_3306_TCP_ADDR","$DB_ENV_MYSQL_USER","$DB_ENV_MYSQL_PASS") or die("Could not connect to database server");
	$db=mysql_select_db("$DB_ENV_ON_CREATE_DB") or die("Could not select Database");

?>
