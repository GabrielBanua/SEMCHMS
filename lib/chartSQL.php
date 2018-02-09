<?php
require 'lib/session.php';
require 'lib/Db.config.php';
$date = date("Y-m-d");
$Month = date('M',strtotime($date));
$Year = date('Y',strtotime($date));
    $Patient = mysql_query( "SELECT * FROM patient WHERE MONTH = '$Month' AND YEAR = '$Year'");
    $NewPatient = mysql_num_rows($Patient);

    $FollowCU = mysql_query("SELECT * FROM (((patient INNER JOIN schedule on patient.P_ID = schedule.P_ID) schedule INNER JOIN medical_record ON schedule.SCHEDULE_ID = medical_record.SCHED_ID) medical_record INNER JOIN treatment ON medical_record.MR_ID = treatment.MR_ID) WHERE F_CHECKUP = '$fcp'");
    $fcup = mysql_num_rows($FollowCU);

    



    
?>