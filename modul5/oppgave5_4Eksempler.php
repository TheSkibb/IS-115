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

//eksempel 1: beskrivende navn
function a($b){
$c = 60;
$d = array();
foreach($b as $e=> $f){
if($f == $c){
array_push($d, $e);
}
if($e < $c){
$c = $f;
$d = array(
$e
);
}
}
return $d;
}

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

//eksempel 2: K2 indetering

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
//eksempel 3: K8 kommentarer

//param: array(String 'navn'=> int $score)
//returns: array med de deltakerene med lavest score i input arrayet
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

?>


</body>
</html> 
