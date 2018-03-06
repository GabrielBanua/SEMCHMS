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
if($page == 'addnewpatientlog'){
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
if($page == 'Editpatientlog'){
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
?>