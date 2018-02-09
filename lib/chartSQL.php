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

    $Lab = mysql_query("SELECT * FROM lab_request WHERE LBR_DATE BETWEEN '$start_date' AND '$end_date'");
    $lbr = mysql_num_rows($Lab);

    $Medicine = mysql_query("SELECT SUM(INV_QTY) AS TotalMeds FROM inventory");
    $Meds = mysql_num_rows($Medicine);
    



    
?>