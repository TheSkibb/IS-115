 <!DOCTYPE html>
<html>
<head>
<title>oppgave 4</title>
</head>
<body>


<?php

$timeZone= new DateTimeZone("Europe/Oslo");
$birthdate= new DateTime("1999-09-09");
$today= new DateTime("now", $timeZone);
$diff = $birthdate->diff($today);

$diffYears = $diff -> y;

$tempDate = $birthdate->add(new DateInterval('P' . $diffYears . 'Y'));

$diff = $tempDate->diff($today)->format('%r%a');

//$tempDate = date_add($diffYears, $birthdate);

echo "personen er " . $diffYears . " år og " . $diff . " dager gammel";
?>


</body>
</html> 
