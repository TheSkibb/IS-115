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


$S = 10000;
$rente = 1.02;

$years = 50;

//looper igjennom så mange ganger som man har satt år og legger til renten på 
//saldoen
echo 'S0 = ' . $S . '<br>';
for($i = 1; $i <= $years; $i++){
  $S = $S * $rente;
  echo 'S' . $i . ' = ' . $S . '<br>';
}

?>


</body>
</html> 

