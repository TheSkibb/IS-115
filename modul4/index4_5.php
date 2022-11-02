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

$deltakere = array(
  'ole' => 0,
  'tom' => 0,
  'trine' => 0,
  'bernt' => 0,
  'kari' => 0,
  'lise' => 0,
  'truls' => 0,
  'reidar' => 0,
);

function game(&$deltakere){

  $rundeCounter = 1;
  
  //i hver runde får hver av deltakerene en random poengsum
  //så blir de med lavest poengsum identifisert
  //de med lavest poengsum blir fjernet fra arrayet over deltakere
  //når det kun er en deltaker igjen i arrayet blir vinneren annonsert
  while(count($deltakere) != 1){
    echo '<b> runde ' . $rundeCounter . '</b><br>';
    giveRandomNumbers($deltakere);
    $laveste = findLast($deltakere);
    removeLast($laveste, $deltakere);
    $rundeCounter ++;
  }
  echo '<br> vinneren er <b>' . array_keys($deltakere)[0] . '</b>';
}

//tar imot et array av deltakere og gir dem en tilfeldig poengsum mellom 1 og 50
function giveRandomNumbers(&$deltakere){
 foreach($deltakere as &$score){
    $score = rand(0, 50);
  }
}

//tar imot et array av deltakere og returnerer et array med de i deltaker-arrayet med laves score
function findLast($deltakere){
  $lowestScore = 60;
  $lowestScorers = array();
  foreach($deltakere as $navn => $score){
    if($score == $lowestScore){
      array_push($lowestScorers, $navn);
    }
    if($score < $lowestScore){
      $lowestScore = $score;
      $lowestScorers = array(
        $navn
      );
    }
  }

  return $lowestScorers;
}

//tar imot to arrayer, det ene er hvilke deltakere som har lavest score og et med alle deltakerene
//deltakerene som ligger i $laveste vil bli fjernet fra $deltakere og annonsert at de ble fjernet
function removeLast($laveste, &$deltakere){
  foreach($deltakere as $navn => $score){
    if(in_array($navn, $laveste)){
      echo $navn . ' er blitt fjernet<br>';
      unset($deltakere[$navn]);
    }
  }
}
//spillet startes
game($deltakere);
?>


</body>
</html> 
