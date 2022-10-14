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

//looper så mange ganger som man har satt (like mange som sjakkbrett)
for($i = 0; $i < $antallRuter; $i++){
  //når antallet hvetekorn går over en milliard skal man skrive det ut som tekst
  if($antallHveteKorn >= 1000000000){
    numberAsText($antallHveteKorn);
  }
  else{
    echo $antallHveteKorn. '<br>';
  }
  $antallHveteKorn = $antallHveteKorn * 2;
}

//param: int $number
//tar imot et tall og skriver det ut med bokstaver
//eks: 1073741824 => 1 milliard, 73 millioner, 741 tusen, 8 hundre og 24.
function numberAsText($number){
  //tallene man vil kunne skrive ut, legg til høyere tall om man vil at
  //den skal kunne skrive ut høyere tall
  $tallArray = array(
    'trillion' => 1000000000000,
    'milliarder' => 1000000000,
    'millioner' => 1000000,
    'tusen' => 1000,
    'hundre' => 100
  );
  
  $outputString = " ";

  //for hvert tall i arrayet finn ut hvor mange ganger antallet hvetekorn
  //går opp
  foreach($tallArray as $tallTekst => $tallTall){
    //finn antallet hele
    //eks om tallTall = 1000000, da blir 2234567 => 2000000
    $heltTall = abs((intval($number) - (intval($number) % $tallTall))); 
    $number -= $heltTall;
    $outputString .= $heltTall / $tallTall . ' ' . $tallTekst . ',';
  }

  //legg til resten og skriv ut alt
  $outputString .= ' og ' . $number;
  echo $outputString . '<br>';
}



?>


</body>
</html> 

