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


$loginFail = '<p style="color:red">logginn feilet, vennligst prøv på nytt</p>';

//om urlen inneholder et query parameter, print beskjed
if(isset($_GET["accessDenied"])){
  echo '<p style="color:red">siden du prøver å gå inn på krever innlogging</p>';
}

//om siden har blitt lastet inn fra en post request
if(isset($_REQUEST['logginn'])){
  require_once('./database.inc.php');

  $sql = "select passord from bruker where brukernavn = :brukernavn";

  $sp = $pdo->prepare($sql);
  $sp->bindParam(':brukernavn', $brukernavn, PDO::PARAM_STR);

  $brukernavn = $_REQUEST['brukernavn'];
  try{
    $sp->execute();
    $result = $sp->fetch(PDO::FETCH_OBJ);
  }
  catch(PDOException $e){
    echo $loginFail;
  }
  
  //om queryen har gitt resultat og passordet i resultatet stemmer settes session 
  //variablene og brukeren redirectes til den beskyttede siden
  if($result !== false && password_verify(strip_tags($_REQUEST['passord']), $result->passord)){
    session_start();
    $_SESSION['bruker']['navn'] = $brukernavn;
    $_SESSION['bruker']['innlogget'] = true;

    header("Location: ./beskyttet.php"); 
    exit();
  }
  else {
    echo $loginFail;
  }
}
?>

<form method="post" action="logginn.php">
  <h1>skriv inn brukernavn og passord</h1>
  <input type="text" name="brukernavn" placeholder="brukernavn"><br>
  <input type="password" name="passord" placeholder="passord"><br>
  <button type="submit" name="logginn">logg inn!</button>
</form>

  </body>
</html>
