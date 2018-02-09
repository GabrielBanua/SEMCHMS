<?php
require 'lib/session.php';
require 'lib/Db.config.php';
$date = date("Y-m-d");
$Month = date('M',strtotime($date));
$Year = date('Y',strtotime($date));


    $Patient = mysql_query( "SELECT * FROM patient WHERE MONTH = '$Month' AND YEAR = '$Year'");
    $NewPatient = mysql_num_rows($Patient);

    $start_date = date('Y-m-d');
    $end_date = date('Y-m-d', strtotime('+7 days'));

    $FCU = mysql_query("SELECT * FROM treatment WHERE F_CHECKUP BETWEEN '$start_date' AND '$end_date'");
    $fcup = mysql_num_rows($FCU);

    $MedCount = mysql_query("SELECT * FROM inventory");

    



    
?>