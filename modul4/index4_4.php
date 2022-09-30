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

print_r($array);
echo '<br>';

foreach($array as &$value){
  $value = 'noe annet';
}

print_r($array);
echo '<br>';

for($i = 0; $i < 10; $i++){
  //echo $array[$i];
  $array[$i + 10] = $array[$i];
  unset($array[$i]);
}

print_r($array);



/*for($i = 0; $i < count($array); $i++){
  $array[$i + 10] = $array[$i];
  unset($i, $array);
}*/

?>


</body>
</html> 
