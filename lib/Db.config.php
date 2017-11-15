<?php
error_reporting(0);

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "semhcms";

$connection = mysql_connect($DB_host, $DB_user, $DB_pass) or die("could'nt connect to server!");
mysql_select_db($DB_name, $connection) or die("could'nt connect to database!");
?>