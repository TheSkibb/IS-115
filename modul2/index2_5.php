 <!DOCTYPE html>
<html>
<head>
<title>oppgave 5</title>
</head>
<body>


<?php

function generatePassword($passwordlength=7){
  $pass = "";
  $letters = "abcdefghijklmnopqrstuvwxyz";
  $numbers = "1234567890";

  $numLetters = rand(1, $passwordlength-1);
  $numCapLetters = rand(1, $numLetters);
  $numNumbers = $passwordlength - $numLetters;

  $pass .= pickrandom($numNumbers, $numbers);
  $pass .= strtoupper(pickrandom($numCapLetters, $letters));
  $pass .= pickrandom($numLetters - $numCapLetters, $letters);

  return str_shuffle($pass);
}

function pickrandom($number, $string){
  $result = "";
  for($i = 0; $i < $number; $i++){
    $character = $string[rand(0, strlen($string)-1)];
    $result .= $character;
  }
  return $result;
}


echo generatePassword();
?>


</body>
</html> 
