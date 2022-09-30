 <!DOCTYPE html>
<html>
<head>
<title>oppgave 3</title>
</head>
<body>


<?php

$searchstr = "Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise";
$searchWord = "is";

    echo 'I setningen : "', $searchstr, '" forekommer ordet: "', $searchWord, '" ', 
        substr_count($searchstr, $searchWord), ' ganger';
?>


</body>
</html> 
