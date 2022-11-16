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

function getApi($url){
  $ch = curl_init();
  $param = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true
  );

  curl_setopt_array($ch, $param);
  $resultat = curl_exec($ch);
  $resinfo = curl_getinfo($ch);
  curl_close($ch);

  echo '<br><br>';
  $resultatJson = json_decode($resultat, true);
  return $resultatJson;
}

function printTabell($quotes){
  echo '<table border="1">
  <tr>
    <th>sitat</th>
    <th>opphav</th>
    <th>dato lagt til</th>
  </tr>
  ';
  foreach($quotes as $quote){
    echo '
    <tr>
      <td> ' . $quote['sitat'] . ' </td>
      <td> ' . $quote['opphav']. ' </td>
      <td> ' . $quote['dato']. ' </td>
    </tr>
    ';
  }
  echo '</table>';
}

echo '<b>spesifikk sitat</b><br>';
$result = getApi('http://localhost/modul10/oppgave10_5/api.php?getQuote=3');
printTabell($result['quotes']);
echo "<br><br>";

echo '<b>alle sitater</b><br>';
$resultAll = getApi('http://localhost/modul10/oppgave10_5/api.php?getAll');
printTabell($resultAll['quotes']);
echo "<br><br>";

echo '<b>tilfeldig sitat</b><br>';
$resultRand = getApi('http://localhost/modul10/oppgave10_5/api.php?getRand');
printTabell($resultRand['quotes']);
echo "<br><br>";



?>
  </body>
</html>
