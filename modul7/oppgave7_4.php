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

include('./database.inc.php');

//henter kun dataen hvor aktiv = true
$sql = "select * from annonser where aktiv is true";

$sp = $pdo->prepare($sql);

$eier = 'kristian';

try{
  $sp->execute();
}
catch(PDOException $e){
  echo $e->getMessage() . "<br>";
}

echo "<table>
<th>eier</th>
<th>leie</th>
<th>adresse</th>
";

$annonser = $sp->fetchAll(PDO::FETCH_OBJ);
if($sp->rowCount() > 0){
  foreach($annonser as $annonse){
    echo "<tr>" .
      "<td>" . $annonse->eier . "</td>" .
      "<td>" . $annonse->leie . "</td>" .
      "<td>" . $annonse->address . "</td>";
  }
}
echo "</table>";
?>
  </body>
</html>
