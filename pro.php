<html><head><title></title></head><body>
<!--header('index.html?msg=1'); if we are receiving the data in server of a form, this command will direct in that file after submission. flag will be shown in address bar-->
<?php  
error_reporting(NULL);
if($_GET['msg']){
    $msg = $_GET['msg'];
    ?>
    <h3 style = "color:red">The Data is uploaded</h3>

  <?php }?>
<form method="post" action="prodetails.php">
  Name: <input type="text" name="Name" /> 
  <input type="submit" name="submit" />
</form>
</body></html>