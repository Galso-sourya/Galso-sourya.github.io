<?php

$con=mysqli_connect("localhost","root","","name") or die("Failed to connect to MySQL:".mysqli_error());
$Name=$_POST['Name'];
$query="INSERT INTO `name`(`Name`)VALUES('$Name');";
if ($con->multi_query($query)== TRUE){
	
echo "submitted";
header('LOCATION:pro.php?msg=1');}
else{
	echo "fail";
}
