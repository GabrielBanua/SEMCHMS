<?php

error_reporting(0);

$page = isset($_GET['p'])?$_GET['p']:'';

if($page == 'logoutLog'){
require 'lib/Db.config.pdo.php';
require 'lib/Db.config.php';
date_default_timezone_set('Asia/Manila');

$ID = mysql_real_escape_string($_POST['ID']);

$stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
$stmtq = mysql_query($stmtf);
$res = mysql_fetch_array($stmtq);

$date = date('Y-m-d H:i:s');
$Fullname = $res['Fullname'];
$postion = $res['Position'];
$Act = "Exited the System";

$stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
    $stmt->bindParam(1,$ID);
    $stmt->bindParam(2,$Fullname);
    $stmt->bindParam(3,$date);
    $stmt->bindParam(4,$postion);
    $stmt->bindParam(5,$Act);
    $stmt->execute();

}
else if($page == 'addnewpatientlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $ADD_PID = mysql_real_escape_string($_POST['PATIENT_ID']);

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Added new patient no.".''.$ADD_PID;
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'Editpatientlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $E_PID = mysql_real_escape_string($_POST['EID']);

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Edited information of patient no.".''.$E_PID;
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'addmedicalrecordlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $MR_PID = mysql_real_escape_string($_POST['MRID']);

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Added new consultation for patient no.".''.$MR_PID;
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'addtreatmentlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $TRTID = mysql_real_escape_string($_POST['TRTID']);
    $MID = mysql_real_escape_string($_POST['MR_ID']);

    $MR_FETCH = mysql_query("SELECT DATE FROM medical_record WHERE MR_ID = '$MID'");
    $MR_RESULT = mysql_fetch_array($MR_FETCH);
    $MR_DATE = $MR_RESULT['DATE'];

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Added treatment for patient no.".''.$TRTID.' - '."Consultation Date( ".$MR_DATE." )";
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'edittreatmentlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $ETRTID = mysql_real_escape_string($_POST['ETRTID']);
    $MID = mysql_real_escape_string($_POST['MR_ID']);

    $MR_FETCH = mysql_query("SELECT DATE FROM medical_record WHERE MR_ID = '$MID'");
    $MR_RESULT = mysql_fetch_array($MR_FETCH);
    $MR_DATE = $MR_RESULT['DATE'];

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Edited treatment information of patient no.".''.$ETRTID.' - '."Consultation Date( ".$MR_DATE." )";
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'addlabreqlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $TRTID = mysql_real_escape_string($_POST['TRTID']);
    $MID = mysql_real_escape_string($_POST['MR_ID']);
    $TEST = mysql_real_escape_string($_POST['TestReq']);

    $MR_FETCH = mysql_query("SELECT DATE FROM medical_record WHERE MR_ID = '$MID'");
    $MR_RESULT = mysql_fetch_array($MR_FETCH);
    $MR_DATE = $MR_RESULT['DATE'];

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Added laboratory request (".$TEST.") for patient no.".''.$TRTID.' - '."Consultation Date( ".$MR_DATE." )";
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'removelabreqlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $TRTID = mysql_real_escape_string($_POST['TRTID']);
    $MID = mysql_real_escape_string($_POST['MR_ID']);
    $TESTREM = mysql_real_escape_string($_POST['TestRem']);

    $MR_FETCH = mysql_query("SELECT DATE FROM medical_record WHERE MR_ID = '$MID'");
    $MR_RESULT = mysql_fetch_array($MR_FETCH);
    $MR_DATE = $MR_RESULT['DATE'];

    $REQ_FETCH = mysql_query("SELECT LBR_TYPE FROM lab_request WHERE LBR_ID = '$TESTREM'");
    $REQ_RESULT = mysql_fetch_array($REQ_FETCH);
    $LAB_TYPE = $REQ_RESULT['LBR_TYPE'];

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Removed laboratory request (".$LAB_TYPE.") of patient no.".''.$TRTID.' - '."Consultation Date( ".$MR_DATE." )";
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'Setschedlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $P_ID = mysql_real_escape_string($_POST['PID']);
    $SC_PUR = mysql_real_escape_string($_POST['SCHED_PURPOSE']);
    $SC_DATE = mysql_real_escape_string($_POST['SCHED_DATE']);

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Set new Schedule(".$SC_PUR.") for patient no.".''.$P_ID.' - '."Schedule Date( ".$SC_DATE." )";
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
else if($page == 'Editschedlog'){
    require 'lib/Db.config.pdo.php';
    require 'lib/Db.config.php';
    date_default_timezone_set('Asia/Manila');

    $ID = mysql_real_escape_string($_POST['ID']);
    $S_ID = mysql_real_escape_string($_POST['SID']);
    $SC_PUR = mysql_real_escape_string($_POST['SCHED_PURPOSE']);
    $SC_DATE = mysql_real_escape_string($_POST['SCHED_DATE']);

    $SCHED_FETCH = mysql_query("SELECT P_ID FROM schedule WHERE SCHEDULE_ID = '$S_ID'");
    $SCHED_RESULT = mysql_fetch_array($SCHED_FETCH);
    $P_ID = $SCHED_RESULT['P_ID'];

    $stmtf = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users WHERE User_id = '$ID'";
    $stmtq = mysql_query($stmtf);
    $res = mysql_fetch_array($stmtq);
    
    $date = date('Y-m-d H:i:s');
    $Fullname = $res['Fullname'];
    $postion = $res['Position'];
    $Act = "Change the Schedule of patient no.".''.$P_ID." to Schedule Purpose( ".$SC_PUR." ) & Schedule Date( ".$SC_DATE." )";
    
    $stmt = $db->prepare("insert into login_logs values('',?,?,?,?,?)");
        $stmt->bindParam(1,$ID);
        $stmt->bindParam(2,$Fullname);
        $stmt->bindParam(3,$date);
        $stmt->bindParam(4,$postion);
        $stmt->bindParam(5,$Act);
        $stmt->execute();
}
?>