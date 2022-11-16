<!DOCTYPE html>
<html>
  <head>
    <title>oppgave 2</title>
  </head>
  <body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//script for å logge hendelser til logg filen files/logg.txt (hver hendelse er en egen linje)
function loggHendelse($hendelse){
$fil = fopen("./files/logg.txt", "a") or die("feilet");
  fwrite($fil, $hendelse . "\n");
fclose($fil);
}

//logg 20 hendelser 
for($i = 0; $i<20; $i++){
  loggHendelse($i);
}
?>

<?php
//script for å printe de siste 10 hendelsene (linjene) i filen
$innhold = file("./files/logg.txt") or die("feil ved åpning av fil");
for($i = sizeof($innhold) - 10; $i < sizeof($innhold); $i++){
  echo $innhold[$i];
}
?>
</body>
</html>
