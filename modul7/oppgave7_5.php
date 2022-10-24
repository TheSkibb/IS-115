<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>
<style>
  table{
    border: 1px solid black;
  }
</style>
  <body>
    <?php
include('./database.inc.php');

$sql = "
select name, preference from userPreference 
  up inner join user u on up.userID = u.id 
  inner join preferences p on up.preferenceID = p.id 
  order by preference
";

$sp = $pdo->prepare($sql);

try{
  $sp->execute();
}
catch(PDOException $e){
  echo $e->getMessage() . "<br>";
}

//print preferanser og hvilke brukere som har denne preferansen
$preferences = $sp->fetchAll(PDO::FETCH_OBJ);
if($sp->rowCount() > 0){
  $tempPreference = "";
  foreach($preferences as $preference){
    if($preference->preference != $tempPreference){
      $tempPreference = $preference->preference;
      echo "<b> " . $preference->preference . " </b><br>"; 
    }
    echo "<ul><li>" . $preference->name . "</li></ul>";
  }
}
echo "</table>";

try{
  $sp->execute();
}
catch(PDOException $e){
  echo $e->getMessage() . "<br>";
}


?>
  </body>
</html>
