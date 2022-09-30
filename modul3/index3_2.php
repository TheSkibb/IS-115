<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sum = 0;
for($i = 0; $i <= 9; $i++){
  echo $i . "<br>";
  $sum += $i;
}

echo "Ferdig med å telle! Summen ble " . $sum;
?>


</body>
</html> 

