<?php
session_start();
require 'lib/Db.config.php';
/**
 * Check if the user is logged in.
 */
$Position = $_SESSION['position'];
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}
$ID = $_SESSION['user_id'];
$sql = "SELECT *, CONCAT(Firstname,' ',Middlename,' ',Lastname) AS Fullname FROM users where User_id = $ID";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

$Fullname = $row['Fullname'];
$UserN = $row['Username'];
$Fname = $row['Firstname'];
$Lname = $row['Lastname'];
$Pos = $row['Position'];
$Status = $row['Status'];


?>
 