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

class Bruker{
  public static $antallBrukere = 0;

  public $brukernavn;
  private $ulesteMeldinger = array();

  //param: $brukernavn String, brukerens brukernavn
  //legger til 1 i antallet brukere
  public function __construct($brukernavn){
    echo 'en ny bruker kalt ' . $brukernavn . ' ble laget <br>*<br>';
    $this->brukernavn = $brukernavn;
    self::$antallBrukere += 1;
  }

  //param: $tilbruker Bruker, brukeren meldingen sendes til
  //param: $innhold String, innholdet i meldingen
  //lager et nytt meldingsobjekt og sender det til mottageren
  public function sendMelding($tilBruker, $innhold){
    $melding = new Melding($this->getBrukernavn(), $tilBruker->brukernavn, $innhold);
    echo $this->brukernavn . ' sendte en melding til ' . $tilBruker->brukernavn . '<br>*<br>';
    $tilBruker->mottaMelding($melding);
  }

  //param: $melding Melding, meldingen som mottas
  //legger til meldingsobjektet i arrayet over uleste meldinger
  public function mottaMelding($melding){
    array_push($this->ulesteMeldinger, $melding);
  }

  //printer ut innholdet i den første meldingen i ¤ulesteMeldinger
  public function lesMelding(){
    //om $ulesteMeldinger er tomt gå ut av funksjonen
    if(count($this->ulesteMeldinger) == 0){
      echo $this->brukernavn . ' har ingen ulest meldinger <br>*<br>';
      return;
    }
    //print innhold
    $melding = $this->ulesteMeldinger[0];
    array_shift($this->ulesteMeldinger);
    echo $this->brukernavn . ' åpnet en melding fra ' . $melding->fraBruker . '<br>' . 
      '----------------------------------------------------------- <br>' .
      $melding->innhold . '<br>' .
      '----------------------------------------------------------- <br>*<br>';

  }

  public function getBrukernavn(){
    return $this->brukernavn;
  }

  //når brukeren slettes blir antallet brukere en mindre
  public function __destruct(){
    echo $this->brukernavn . ' ble slettet <br>*<br>';
    self::$antallBrukere -= 1;
  }

  //printer antall brukere i systemet
  public static function getAntallBrukere(){
    echo 'for øyeblikket er det ' . self::$antallBrukere . ' brukere i systemet <br>*<br>';
  }

}

class Melding{
  public static $aktiveMeldinger = 0;

  public $fraBruker;
  public $tilBruker;
  public $innhold;

  //param: $fraBruker Bruker, brukeren som sender meldingen
  //param: $tilBruker Bruker, brukeren som mottar meldingen
  //param: $innhold String, innholdet i meldingen
  //legger til 1 i antallet meldinger
  public function __construct($fraBruker, $tilBruker, $innhold){
    $this->fraBruker = $fraBruker;
    $this->tilBruker = $tilBruker;
    $this->innhold = $innhold;
    self::$aktiveMeldinger += 1;
  }

  //når meldingen slettes blir antallet 1 mindre
  public function __destruct(){
    self::$aktiveMeldinger -= 1;
  }

  //printer antall aktive (ikke leste) meldinger i systemet
  public static function getAntallMeldinger(){
    echo 'for øyeblikket er det ' . self::$aktiveMeldinger. ' meldinger i systemet <br>*<br>';
  }

}

//demonstrasjon av 
$bruker1 = new Bruker('ola');
$bruker2 = new Bruker('kari');

Bruker::getAntallBrukere();

$bruker1->sendMelding($bruker2, "hei dette er en melding");
$bruker2->lesMelding();
$bruker2->sendMelding($bruker1, "tusen takk for meldingen jeg satte veldig pris på den");
$bruker1->lesMelding();
$bruker1->lesMelding();

$bruker1->sendMelding($bruker2, "hei dette er en melding");
$bruker1->sendMelding($bruker2, "hei dette er en melding");
$bruker1->sendMelding($bruker2, "hei dette er en melding");
$bruker1->sendMelding($bruker2, "hei dette er en melding");

Melding::getAntallMeldinger();

$bruker2->lesMelding();
$bruker2->lesMelding();

Melding::getAntallMeldinger();

unset($bruker1);

Bruker::getAntallBrukere();

?>


</body>
</html> 
