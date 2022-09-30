 <!DOCTYPE html>
<html>
<head>
<title>opggave 4</title>
</head>
<body>

<?php
$tall1 = 1;
$tall2 = 2;

function sum($num1, $num2){
    $sum = $num1 + $num2;
    echo $num1, " + ", um2, " = ", $sum, "\n";
}

function differanse($num1, $num2){
    if($num1 > $num2){
        $differanse = $num1 - $num2;
    }
    else{
        $differanse = $num2 - $num1;
    }

    echo $num1, " - ", $num2, " = ", $differanse, "\n";
}

function gjennomsnitt($num1, $num2){
    $gjennomsnitt = ($num1 + $num2) / 2;
    echo "gjennomsnittet av ", $num1, " og ", $num2, " er ", $gjennomsnitt;
}

sum($tall1, $tall2);
differanse($tall1, $tall2);
gjennomsnitt($tall1, $tall2);
?>

</body>
</html> 
