<?php

include('mtrack_db_connection.php');

$result=mysqli_query($con,"SELECT * FROM `expenses` WHERE `email` = '" . $_SESSION['user_email'] . "' ORDER BY `expenses`.`exp_date` ASC;");

print("<table class=")."table".">";
print("<thead>");
print("<tr>");
print("<th>Date</th>");
print("<th>Amount (in Rs.)</th>");
print("<th>Expense</th></tr></thead>");
print("<tbody>");

while($row = mysqli_fetch_array($result)) 
{
	echo "<tr>";
	echo "<td>".$row['exp_date']."</td>";
	echo "<td>".$row['exp_amt']."</td>";
	echo "<td>".$row['exp_name']."</td>";
	echo "</tr>";	
}

print("</tbody>");
print("</table>");


?>