 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

    $sekunder = 4400;
    
    $minutter = floor($sekunder / 60);
    $sekunderRest = $sekunder % 60;

    $timer = floor($minutter / 60);
    $minutterRest = $minutter % 60;
    

    echo "I ", $sekunder, " sekunder er det ", $timer, " timer ", $minutterRest, " minutter og ", $sekunderRest, " sekunder"
?>

</body>
</html> 
