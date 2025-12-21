<html><head><title></title></head><body TEXT="green" BGCOLOR="black"><?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
$read = file('names.txt');
    $count = count($read);
    $i = 1;
    foreach ($read as $line) {
        echo $line;
        if($i < $count) {
            echo ', ';
        }
        $i++;
    }
?>
<form method="post" >
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>
<!--
  to run this file-
  1. start xampp
  2. go to the location C:\xampp\htdocs\
  3. create any folder like myproject
  4. the php file name should be index.php inside this folder
  5. a text file names.txt should be there also in same location.
  6. http://localhost/myproject/
  -->
</body>
  <!--to run this file
  1. 
  -->
</html>

