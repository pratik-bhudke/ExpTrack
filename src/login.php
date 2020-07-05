<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include('mtrack_db_connection.php');
  
    $username = $_POST['user_email'];
    $userpassword = $_POST['user_password'];
    
    $result = mysqli_query($con,"SELECT * FROM `user` WHERE '$username' = `email`");
$row = mysqli_fetch_array($result);
if($row == NULL) {
    mysqli_query($con,"INSERT INTO `user`(`email`, `password`) VALUES ('$username','$userpassword')");
    mysqli_query($con,"INSERT INTO `wallet`(`email`, `wallet_amt`) VALUES ('$username','0')");
    $_SESSION['user_email'] = $username;
    header("Location: mainpage.php");   
}
 else {
    if( ($username == $row['email']) &&  ($userpassword == $row['password'])) {
        $_SESSION['user_email'] = $username;
        header("Location: mainpage.php");
    }
    else
        header("Location: login.html");


}
   
?>