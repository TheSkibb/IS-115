<!DOCTYPE html>
<html>
  <head>
    <title>7 1</title>
  </head>
<style>
  table{
    border: 1px solid black;
  }
</style>
  <body>
    <?php
include('./database.inc.php');

$sql = "select * from annonser";

$sp = $pdo->prepare($sql);

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
      "<td>" . $annonse->address . "</td>" .
      "</tr>";
  }
}
echo "</table>";

?>
  </body>
</html>
