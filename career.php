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
</body></html>