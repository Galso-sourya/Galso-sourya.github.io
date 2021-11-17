<?php
$con=mysqli_connect("localhost","root","","csv") or die("Failed to connect to MySQL:".mysqli_error());
$q1 = "SELECT * FROM `dummy` left join `dummy0` on `dummy`.`name`=`dummy0`.`name`";
$results = $con->query($q1);
while($row = $results->fetch_array()){
    echo $row['name']." - - ".
      $row['contact']." - - ".
	  $row['gender']." - - ".
      $row['job']."<br>";
}
echo "Search results<br>";
$k1 = $_GET['k1'];
$k2 = $_GET['k2'];
$opt = $_GET['opt'];
$q2 = "SELECT * FROM `dummy` left join `dummy0` on `dummy`.`name`=`dummy0`.`name` WHERE `dummy`.`name` LIKE '%$k1%'
AND `dummy`.`gender` LIKE '%$k2%'";
$q3 = "SELECT * FROM `dummy` left join `dummy0` on `dummy`.`name`=`dummy0`.`name` WHERE `dummy`.`name` LIKE '%$k1%'
OR `dummy`.`gender` LIKE '%$k2%'";
if($opt=='AND'){
$results0 = $con->query($q2);}else{
	
$results0 = $con->query($q3);}	
echo "<table border='3'><tr><th>name</th><th>contact</th><th>gender</th><th>job</th></tr>";
while($row = $results0->fetch_array()){
    echo "<tr>";
	echo "<td>".$row['name']."</td>";
    echo "<td>".$row['contact']."</td>";
      echo "<td>".$row['gender']."</td>";
	  echo "<td>".$row['job']."</td>";
	 echo "</tr>"; 
}echo "</table>";
?>