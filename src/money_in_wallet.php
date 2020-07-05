<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include('mtrack_db_connection.php');

$result = mysqli_query($con,"SELECT `wallet_amt` FROM `wallet` WHERE `email` = '" . $_SESSION['user_email'] . "'");
$row = mysqli_fetch_array($result);

echo $row['wallet_amt'];

?>