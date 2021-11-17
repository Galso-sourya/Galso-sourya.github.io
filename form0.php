<?php

$con=mysqli_connect("localhost","root","","career") or die("Failed to connect to MySQL:".mysqli_error());
$Name=$_POST['text'];
$query="INSERT INTO `career`(`name`)VALUES('$Name');";
if ($con->multi_query($query)== TRUE){
	
echo "submitted";
header('LOCATION:form.php?msg=1');}
else{
	echo "fail";
}