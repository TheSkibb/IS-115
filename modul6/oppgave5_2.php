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

/**
 *@var String fornavn
 *@var String etternavn
 *@var String brukernavn
 *@var Date registreringsDato
 */
class Bruker{
  var $fornavn;
  var $etternavn;
  public $brukernavn = "default";
  var $registreringsDato;

  function setUserInfo($Fornavn, $Etternavn, $Brukernavn, $RegistreringsDato){
    $this->fornavn = $Fornavn;
    $this->etternavn = $Etternavn;
    $this->brukernavn = $Brukernavn;
    $this->registreringsDato = $RegistreringsDato;
  }

  function getUserInfo(){
    return array(
      'fornavn'=>$fornavn, 
      'etternavn'=>$etternavn, 
      'brukernavn'=>$brukernavn, 
      'registreringsDato'=>$registreringsDato
    );
  }
  function test(){
    echo 'test';
  }
}

class Student extends Bruker{
  function getUserInfo(){
    return array(
      'fornavn'=>$fornavn, 
      'etternavn'=>$etternavn, 
      'registreringsDato'=>$registreringsDato
    );
  }
}

?>

</body>
</html> 
