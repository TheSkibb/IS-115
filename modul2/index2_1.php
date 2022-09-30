 <!DOCTYPE html>
<html>
<head>
<title>oppgave 1</title>
</head>
<body>


<?php

$etternavn = "norDMann";

function formatEtternavn($etternavn){
    $etternavn = ucfirst(strtolower($etternavn));

    return $etternavn;
}

echo formatEtternavn($etternavn);
echo "<br>Etternavnet er ", strlen($etternavn), " bokstaver langt";
?>


</body>
</html> 
