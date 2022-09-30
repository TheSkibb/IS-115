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

$antallRuter = 8 * 8;
$antallHveteKorn = 1;

for($i = 0; $i < $antallRuter; $i++){
  if($antallHveteKorn >= 1000000000){
    numberAsText($antallHveteKorn);
  }
  else{
    echo $antallHveteKorn. '<br>';
  }
  $antallHveteKorn = $antallHveteKorn * 2;
}

function numberAsText($number){
  $tallArray = array(
    'trillion' => 1000000000000,
    'milliarder' => 1000000000,
    'millioner' => 1000000,
    'tusen' => 1000,
    'hundre' => 100
  );
  
  $outputString = " ";

  foreach($tallArray as $tallTekst => $tallTall){
    $heltTall = abs((intval($number) - (intval($number) % $tallTall))); 
    $number -= $heltTall;
    $outputString .= $heltTall / $tallTall . ' ' . $tallTekst . ',';
  }

  $outputString .= ' og ' . $number;
  echo $outputString . '<br>';
}



?>


</body>
</html> 

