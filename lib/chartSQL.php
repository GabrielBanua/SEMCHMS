<?php
require 'lib/session.php';
require 'lib/Db.config.php';
$date = date("Y-m-d");
$Month = date('m',strtotime($date));
$Year = date('Y',strtotime($date));
    $Patient = mysql_query( "SELECT * FROM patient WHERE MONTH = '$Month' AND YEAR = '$Year'");
    $NewPatient = mysql_num_rows($Patient);

?>