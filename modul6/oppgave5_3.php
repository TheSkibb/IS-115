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
  public static $slettedeBrukere = array();
  var $fornavn;
  var $etternavn;
  protected $brukernavn;
  protected $registreringsDato;

  public function __construct($fornavn, $etternavn){
    $this->fornavn = $fornavn;
    $this->etternavn = $etternavn;
    $this->brukernavn = self::genererBrukerNavn(5);
    $registreringsDato = new DateTime();
  }

  private static function genererBrukerNavn($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';
   
      for ($i = 0; $i < $n; $i++) {
          $index = rand(0, strlen($characters) - 1);
          $randomString .= $characters[$index];
      }
   
      return $randomString;
  }

  function setUserInfo($inpFornavn, $inpEtternavn, $inpBrukernavn, $inpRegistreringsDato){
  $fornavn = $inpFornavn;
  $etternavn = $inpEtternavn;
  $brukernavn = $inpBrukernavn;
  $registreringsDato = $inpRegistreringsDato;
  }

  public function getUserInfo(){
    return array(
      'fornavn'=>$fornavn, 
      'etternavn'=>$etternavn, 
      'brukernavn'=>$brukernavn, 
      'registreringsDato'=>$registreringsDato
    );
  }
  public function __destruct(){
    array_push(self::$slettedeBrukere, $this->brukernavn);
  }
}

$ola = new Bruker('Ola', 'Nordmann');
$kari = new Bruker('Kari', 'Olsen');

unset($ola);
unset($kari);

print_r(Bruker::$slettedeBrukere);

?>

</body>
</html> 
