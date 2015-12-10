<?php

/*
 * All database connection variables
 */

define('DB_USER', "xxxxxxx"); // db user
define('DB_PASSWORD', "xxxxxx"); // db password (mention your db password here)
define('DB_DATABASE', "xxxxxxx"); // database name
define('DB_SERVER', "xxxxxx"); // db server

$mysql_hostname = "localhost";
$mysql_user = "xxxxxx";
$mysql_password = "xxxxxx";
$mysql_database = "xxxxxx";


$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("  Tatizo ni connection");


mysql_select_db($mysql_database, $db) or die("   Tatizo ni database");

?>
