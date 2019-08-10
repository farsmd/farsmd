<form action="csv.php" method="post">
  <input type="text" name="search" />
  <input type="submit" name="submit" value="Submit">
</form>
<?php

function search1($file,$search) // farshad == a or d : yes * $file:csv , $search in csv file *
{
  $db1 = file($file);//csv
  $data = array();//array
  $ln = count($db1);//ilne number
  for($i = 1; $i < $ln; $i++) {
      $line = explode(',', $db1[$i]);
      for($j = 0; $j < count($line); $j++) {
          $data[$i][$j + 1] = $line[$j];
          if(strstr($data[$i][$j + 1],$search)) {
            echo 'yes '.$search1.' in '.$data[$i][$j + 1]."</BR>"; //outpu yes
          }
      }
  }

}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["search"])) {
    echo "error 101";
  }else {
    search1("data.csv",$_POST["search"]);
  }
}


?>
