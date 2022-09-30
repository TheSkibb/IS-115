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

$alder = 17;
$navn = "kristian";

echo $navn . " er " . $alder . " og dermed";
if ($alder=18) {
 echo " ikke";
}
echo " myndig";

?>


</body>
</html> 
