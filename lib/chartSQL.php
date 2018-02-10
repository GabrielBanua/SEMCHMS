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

    $Med = mysql_query("SELECT SUM(INV_QTY) AS TotalMeds FROM inventory");
    $tmeds = mysql_fetch_array($Med);

    $MO = mysql_query("SELECT COUNT(P_ID) AS TotalMON FROM patient WHERE YEAR = '$Year' GROUP BY MONTH ORDER BY TotalMON DESC");
    
    $labrequest = mysql_query("SELECT COUNT(LBR_ID) AS TotalRequest FROM lab_request WHERE STATUS = 'Pending'");
    $LR = mysql_fetch_array($labrequest);

    $iJAN = mysql_query("SELECT COUNT(P_ID) AS JAN_RES FROM patient WHERE MONTH = 'Jan' AND YEAR = '$Year'");
    $iJAN_RES = mysql_fetch_array($iJAN);

    $iFEB = mysql_query("SELECT COUNT(P_ID) AS FEB_RES FROM patient WHERE MONTH = 'Feb' AND YEAR = '$Year'");
    $iFEB_RES = mysql_fetch_array($iFEB);

    $iMAR = mysql_query("SELECT COUNT(P_ID) AS MAR_RES FROM patient WHERE MONTH = 'Mar' AND YEAR = '$Year'");
    $iMAR_RES = mysql_fetch_array($iMAR);

    $iAPR = mysql_query("SELECT COUNT(P_ID) AS APR_RES FROM patient WHERE MONTH = 'Apr' AND YEAR = '$Year'");
    $iAPR_RES = mysql_fetch_array($iAPR);

    $iMAY = mysql_query("SELECT COUNT(P_ID) AS MAY_RES FROM patient WHERE MONTH = 'May' AND YEAR = '$Year'");
    $iMAY_RES = mysql_fetch_array($iMAY);

    $iJUN = mysql_query("SELECT COUNT(P_ID) AS JUN_RES FROM patient WHERE MONTH = 'Jun' AND YEAR = '$Year'");
    $iJUN_RES = mysql_fetch_array($iJUN);

    $iJUL = mysql_query("SELECT COUNT(P_ID) AS JUL_RES FROM patient WHERE MONTH = 'Jul' AND YEAR = '$Year'");
    $iJUL_RES = mysql_fetch_array($iJUL);

    $iAUG = mysql_query("SELECT COUNT(P_ID) AS AUG_RES FROM patient WHERE MONTH = 'Aug' AND YEAR = '$Year'");
    $iAUG_RES = mysql_fetch_array($iAUG);

    $iSEP = mysql_query("SELECT COUNT(P_ID) AS SEP_RES FROM patient WHERE MONTH = 'Sep' AND YEAR = '$Year'");
    $iSEP_RES = mysql_fetch_array($iSEP);

    $iOCT = mysql_query("SELECT COUNT(P_ID) AS OCT_RES FROM patient WHERE MONTH = 'Oct' AND YEAR = '$Year'");
    $iOCT_RES = mysql_fetch_array($iOCT);

    $iNOV = mysql_query("SELECT COUNT(P_ID) AS NOV_RES FROM patient WHERE MONTH = 'Nov' AND YEAR = '$Year'");
    $iNOV_RES = mysql_fetch_array($iNOV);

    $iDEC = mysql_query("SELECT COUNT(P_ID) AS DEC_RES FROM patient WHERE MONTH = 'Dec' AND YEAR = '$Year'");
    $iDEC_RES = mysql_fetch_array($iDEC);


?>