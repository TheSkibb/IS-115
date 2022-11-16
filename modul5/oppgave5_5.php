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

//dette er en krypteringsalgoritme basert paa ceaser cipher

$inputString = 'her er en veldig hemmelig setning, det er ingen som skal se den.';
$nokkel = 3;

//param: string $inputString setningen du vil kryptere
//param: int $nokkel et offset som brukes til aa lage et cipher for kryptering
//return: string den krypterte stringen
//cryptere
function krypter($inputString, $nokkel){
  $inputArray = str_split($inputString);
  $ouputString = '';
  $cipher = konstruerCipher($nokkel);
  for($i = 0; $i < count($inputArray); $i++){
    //legg til den krypterte versjonen av bokstav nummer $i i inputstrengen
    $ouputString .= $cipher[array_values($inputArray)[$i]];
  }
  return $ouputString;
}

//param: string $inputString setningen du vil
//return: string den dekrypterte stringen
function dekrypter($inputString, $nokkel){
  $inputArray = str_split($inputString);
  $ouputString = '';
  $cipher = konstruerCipher($nokkel);
  for($i = 0; $i < count($inputArray); $i++){
    /*finn hvilken key i cipheret som hoerer til bokstav nummer $i i den 
    krypterte strengen og legg den til ouputstringen*/
    $ouputString .= array_search(array_values($inputArray)[$i], $cipher);
  }
  return $ouputString;
}

//params: int $nokkel
//return: array
//lager et array hvor basert paa nokkelen du gir. dette arrayet kan brukes for
//aa kyptere og dekryptere en setning
//setningen kan ikke inneholde andre bokstaver eller tegn enn de som ligger i 
//$alfabet, æ, ø og å vil ikke være mulig å implementere, for de kan ikke 
//være key
function konstruerCipher($nokkel){
  $alfabet = array(
  'a' => 'a', 'b' => 'b', 'c' => 'c', 'd' => 'd', 'e' => 'e', 'f' => 'f',
  'g' => 'g', 'h' => 'h', 'i' => 'i', 'j' => 'j', 'k' => 'k', 'l' => 'l',
  'm' => 'm', 'n' => 'n', 'o' => 'o', 'p' => 'p', 'q' => 'q', 'r' => 'r',
  's' => 's', 't' => 't', 'u' => 'u', 'v' => 'v', 'w' => 'w', 'x' => 'x',
  'y' => 'y', 'z' => 'z', '.' => '.', ',' => ',', ':' => ':', ' ' => ' ');

  $cipher = array();
  $alfabetLengde = count($alfabet);

  for($i = 0; $i < $alfabetLengde; $i++){
    $nyIndex = $i + $nokkel;

    if($nyIndex > $alfabetLengde){
      $nyIndex -= $alfabetLengde;
    }
    
    $cipher[array_keys($alfabet)[$i]] = array_values($alfabet)[$nyIndex - 1];
  }
  return $cipher;
}

$kryptert = krypter($inputString, $nokkel);
$dekryptert = dekrypter($kryptert, $nokkel);

echo 'dette er den krypterte setningen: <br>
  
  ' .
  $kryptert . '<br>
  
  ' .
  'dette er den dekrypterte <br>
  
  ' .
  $dekryptert . '

';

?>


</body>
</html> 
