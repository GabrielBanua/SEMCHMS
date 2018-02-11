<?php
define("BACKUP_PATH" , "C:\wamp\www\SEMHCMS\backup");
$server_name = "localhost";
$username = "root";
$password  = "";
$database_name = "semhcms";
$date_string = date("YmD");

$backup = "full path of mysqldump --routines -h {$server_name} -u {$username} -p{$password} {$database_name} > " . BACKUP_PATH . "{$date_string}_{$database_name}.sql";
exec($backup);
?>
