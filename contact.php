<html><head><title>Contact!!!!</title></head><body><?php
include_once 'header.php';
echo "<br />";
echo $_SERVER['SCRIPT_NAME'];
echo "<br />";
echo $_SERVER['HTTP_HOST'];?>
<form action="yourcontact.php" method="POST" enctype="multipart/form-data"><!--enctype is used if we neeed to upload a file-->
  Name: <input type="text" name="Name" /> 
  <br />
  E-mail: <input type="text" name="Email" />
  <br />
  Mobile: <input type="number "name="Mobile" />
  <br />
  CV:<input type="file" name="cv"/><br />
  <input type="submit" name="submit" />
</form></body>
<?php
$in1 = rand(0,6);
echo "$in1";
echo "<br />";?>
</html>