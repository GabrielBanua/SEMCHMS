<?php
session_start();
/**
 * Check if the user is logged in.
 */
$Position = $_SESSION['position'];
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}
?>
 