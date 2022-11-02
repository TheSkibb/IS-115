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

//Klasse for brukere
Class Bruker{
  //alle brukere som finnes
  public static $brukere = array();
  //generell info om bruker
  public $username;
  private $fornavn;
  private $etternavn;
  private $email;

  //brukeren må ha en konstruktor som initialiserer verdiene til brukeren
  public function __construct($username, $fornavn, $etternavn, $email){
  }

  //funksjon for å sende meldinger
  public function sendMelding($innhold, $chatRom){
  }

  //funksjon for å se meldingene i et chatrom
  public function seMeldinger($chatRom){
  }
}

//chatrom klassen
Class ChatRom{
  //meldinger sendt i chatrommet
  private $meldinger = array();
  //brukere med tilgang til chatrommet
  private $brukere = array();

  //param: $brukere Array
  //konstruktor initialiserer et chatrom med et array av brukere
  public function __construct($brukere){
  }

  //param: $bruker Bruker
  //funksjon for å sjekke om en bruker har tilgang til chatrommet
  //return: boolean
  public function harTilgang($bruker){
  }

  //param: $melding Melding
  //funksjon som legger en melding til i arrayet over meldingene i chatrommet
  public function sendMelding($melding){
  }

  //param: $antall int
  //funksjon som henter ut $antall meldinger (nyeste først) fra $meldinger
  //return: array
  public function visMeldinger($antall = 0){
  }


  //param: $bruker Bruker
  //legger til en bruker i arrayer over brukere med tilgang til chatrommet
  public function leggTilBruker($bruker){
  }

  //param: $bruker Bruker
  //fjerner $bruker fra arrayet over brukere med tilgang til chatrommet
  public function fjernBruker($bruker){
  }
}

Class Melding{
  public $fraBruker;
  public $innhold;
  public $timeStamp;

  //param: $frabruker Bruker
  //param: $innhold String
  //konstruktor for meldingsklassen
  public function __construct($fraBruker, $innhold){
  }
}
?>


</body>
</html> 
