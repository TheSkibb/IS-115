<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>
<body>
  <center>
    <h1>DISPLAY DATA PRESENT IN CSV</h1>
    <h3>Student data</h3>

<?php
echo "<html><body><center><table>\n\n";

$file = fopen("./files/vgsales.csv", "r");

$rowNr = 1;
$maxRows = 20;
while (($data = fgetcsv($file)) !== false) {
  echo "<tr>";
  foreach ($data as $i) {
    echo "<td>" . htmlspecialchars($i) 
    . "</td>";
  }
  echo "</tr> \n";
  if($rowNr>20){
    return;
  }
  else{
    $rowNr++;
  }
}
fclose($file);
echo "\n</table></center></body></html>";
?>

  </center>
</body>
  </body>
</html>
