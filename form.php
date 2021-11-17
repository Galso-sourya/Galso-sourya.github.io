<html><head><title></title></head><body>
<?php  if($_GET['msg']){
    $msg = $_GET['msg'];
    ?>
    <h3 style = "color:red">The Data is uploaded</h3>

  <?php }?>

<form method="post" action="form0.php">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>
</body></html>