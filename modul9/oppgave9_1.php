<!DOCTYPE html>
<html>
  <head>
    <title>oppgave 1</title>
  </head>
  <body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$kat = "./";
//lager en peker til $kat katalogen
$peker = opendir($kat);

//lag starten av en tabell
echo "
<table border=\"1\">
  <tr>
    <th>filnavn</th>
    <th>filtype</th>
    <th>filstorrelse</th>
    <th>sist endret</th>
    <th>R</th>
    <th>W</th>
    <th>X</th>
  </tr>
";

//loop gjennom alle filene i katalogen ved å bruke pekeren
while($fil = readdir($peker)){
  echo "<tr>";
  echo "<td> <a href=\"" . $kat . $fil . "\">" . $fil . "</a></td>";
  //filtypen
  echo "<td>" . filetype($kat . $fil) . "</td>";
  //filstorrelsen
  echo "<td>" . filesize($kat . $fil) . "</td>";
  //sist endret
  echo "<td>" . date("d.m.Y \k\l, H:i", filemtime($kat . $fil)) . "</td>";
  //lov å lese
  echo "<td>" . (is_readable($kat . $fil) ? 'J' :  'N') . "</td>";
  //lov å skrive
  echo "<td>" . (is_writable($kat . $fil) ? 'J' :  'N') . "</td>";
  //lov å kjøre
  echo "<td>" . (is_executable($kat . $fil) ? 'J' :  'N') . "</td>";
  echo "</tr>";
}

echo "</table>"
?>
  </body>
</html>
