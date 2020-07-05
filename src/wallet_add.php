<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include('mtrack_db_connection.php');

$a = $_POST['wallet_money'];

$result = mysqli_query($con,"SELECT `wallet_amt` FROM `wallet` WHERE `email` = '" . $_SESSION['user_email'] . "'");
$row = mysqli_fetch_array($result);

$b = $row['wallet_amt'];

if($b == NULL) {
    $b = 0;
}

$c = $a + $b;

    if(mysqli_query($con,"UPDATE `wallet` SET `wallet_amt`='$c' WHERE `email` = '" . $_SESSION['user_email'] . "'"))
            header("Location: mainpage.php");
    else
            echo "ERROR";


?>