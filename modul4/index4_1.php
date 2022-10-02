 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


<?php

$array = array(
  0 => "value",
  3 => "another value",
  5 => "yet another value",
  7 => "test",
  8 => "test2",
  15 => "test3",
);

//skrive ut med print_r
print_r($array);

echo '<br><br>';

//skrive ut med en loop
foreach($array as $value){
  echo $value . '<br>';
}
?>


</body>
</html> 
