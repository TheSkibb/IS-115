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
  var $brukernavn;
  var $registreringsDato;

  function setUserInfo($inpFornavn, $inpEtternavn, $inpBrukernavn, $inpRegistreringsDato){
    $fornavn = $inpFornavn;
    $etternavn = $inpEtternavn;
    $brukernavn = $inpBrukernavn;
    $registreringsDato = $inpRegistreringsDato;
  }

  function getUserInfo(){
    return array(
      'fornavn'=>$fornavn, 
      'etternavn'=>$etternavn, 
      'brukernavn'=>$brukernavn, 
      'registreringsDato'=>$registreringsDato
    );
  }
}
?>

</body>
</html> 
