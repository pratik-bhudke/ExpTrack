<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include('mtrack_db_connection.php');

$result=mysqli_query($con,"SELECT * FROM `expenses` WHERE `email` = '" . $_SESSION['user_email'] . "' ORDER BY `expenses`.`exp_date` ASC");

$table = array();

$table['cols'] = array(
    //Labels for the chart, these represent the column titles
    array('id' => 'date', 'label' => 'Date', 'type' => 'string'),
    array('id' => 'amount', 'label' => 'Expense (in Rs.)', 'type' => 'number')
    );

$rows=array();

$temp = array();

while($row = mysqli_fetch_array($result)) 
{
	$originalDate = $row['exp_date'];
	$newDate = date("d/m/Y", strtotime($originalDate));
	
	$temp[0] = array('v' => $newDate);
	$temp[1] = array('v' => $row['exp_amt']);
	$rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
 
echo json_encode($table);

?>