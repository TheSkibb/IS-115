<?php
include "./database.inc.php";

if(key_exists('getQuote', $_GET)){
  $sql = "select * from sitater where id = :id";
  $sp = $pdo->prepare($sql);
  $sp->bindParam(':id', $id, PDO::PARAM_INT);
  $id = $_GET['getQuote'];
}
else if(key_exists('getAll', $_GET)){
  $sql = "select * from sitater";
  $sp = $pdo->prepare($sql);
}
else if(key_exists('getRand', $_GET)){
  $sql = "select * from sitater order by rand() limit 1;";
  $sp = $pdo->prepare($sql);
}
else{
  echo '{"quotes":"null", "error":"query parameter mangler"}';
  exit();
}


try{
  $sp->execute();
  $results = $sp->fetchAll(PDO::FETCH_OBJ);
}
catch(PDOException $e){
echo '{"quotes":"null", "error":"' . $e->getMessage . '"}';
exit();
}

$outputStr = '{"quotes":"null"}';
if($sp->rowCount() > 0){
  $outputStr = '{"quotes":[';
  foreach($results as $result){
    $outputStr .= '{
      "sitat": "' . $result->sitat . '",
      "opphav": "' . $result->opphav . '",
      "dato": "' . $result->dato . '",
      "rowCount": "' . $sp->rowCount() . '"
    }';
    if($result->id !== $sp->rowCount() 
      && $sp->rowCount() !== 1){
      $outputStr .= ',';
    }
  }

  $outputStr .= ']}';
}
echo $outputStr;


?>
