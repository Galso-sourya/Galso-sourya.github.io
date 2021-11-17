<?php
$con=mysqli_connect("localhost","root","","yourcontact") or die("Failed to connect to MySQL:".mysqli_error());/*create connect with server. 1st one is server address. provide ip address if different server. next is username and passward. for this, default is root and blank passward.last is name of database.*/
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$filename=$_FILES['cv']['name'];
$tmpPath = $_FILES['cv']['tmp_name'];
$fileSize = $_FILES['cv']['size'];

$query="INSERT INTO `details`(`Name`,`Email`,`Mobile`,`CV`)VALUES('$Name','$Email','$Mobile','$filename');";
$allowedFileFormats = array('docx', 'doc', 'pdf');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$targetPath = "CVS/$Mobile.$ext";   /*we can give any filename like "CVS/abc.docx" sp here folder name/file name*/
if($tmpPath){
	if(in_array($ext,$allowedFileFormats)){
	if((($fileSize)/1024)>50){
move_uploaded_file($tmpPath,$targetPath);	
if ($con->multi_query($query)== TRUE){
	
echo "submitted";}
else{
	echo "fail";
}
}else{
      echo "File is huge!!!<BR>";
	}}
	else{
    echo "Please upload file in doc of PDF format.<BR>";
  }
}else {
  echo "NO FILE UPLOADED!!!<BR>";
}
echo "<br />";
echo "$tmpPath";
echo "<br />";
echo "$fileSize";   // in bytes
echo "<br />";

?>