<?php
session_start();
require 'lib/Db.config.php';
require 'lib/Db.config.pdo.php';
date_default_timezone_set('Asia/Manila');
/**
 * Check if the user is logged in.
 */
$Position = $_SESSION['position'];
$ID = $_SESSION['user_id'];
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}

$sql = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users where User_id = $ID";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$Fullname = $row['Fullname'];
$Date = date('Y-m-d H:i:s');

$Pos = $row['Position'];
$UserN = $row['Username'];
$Fname = $row['Firstname'];
$Lname = $row['Lastname'];
$Status = $row['Status'];

?>
 