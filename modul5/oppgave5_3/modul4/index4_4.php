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

$array = [
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  8,
  9,
  10
];
//åøæ

echo 'original : <br>';
print_r($array);
echo '<br>';

//hvert element i arrayet blir tildelt en ny verdi
foreach($array as &$value){
  $value = random_int(0, 10);
}

echo 'nye verdier: <br>';
print_r($array);
echo '<br>';

//lager et nytt array hvor verdiene er fra 10 til 19
$newKeys = range(10, count($array) + 9);
//slår sammen $newKeys og $array, verdiene til $newKeys vil bli nøklene og verdiene til $array blir verdiene
$array = array_combine($newKeys, $array);

echo 'nye nøkler: <br>';
print_r($array);


?>


</body>
</html> 
