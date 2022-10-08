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

//nb i utgangspunktet ville jeg ikke tenkt at dokumentasjon for disse funksjonene er nødvendig
//ettersom jeg tenker de er så små og enkle å forstå, men har tatt det med som et eksempel

$tall1= 1;
$tall2= 2;
$tall3 = 3;
$tall4 = 4;

/**
 * regner ut gjennomsnittet og standardavvik til fire tall.
 * 
 * @since 1.0.0
 *
 * @see regnGjennomsnitt og regnStandardAvvik
 * @param int $num1 tall brukes til gjennomsnitt
 * @param int $num2 tall brukes til gjennomsnitt
 * @param int $num3 tall brukes til gjennomsnitt
 * @param int $num4 tall brukes til gjennomsnitt
 * @return array med to elementer 'gjennomsnitt' og 'standardavvik'
 */
function regnGjsnOgStdAvvik($tall1, $tall2, $tall3, $tall4){
  $results = array();
  $results['gjennomsnitt'] = regnGjennomsnitt(array($tall1, $tall2, $tall3, $tall4));
  $results['standardavvik'] = regnStandardAvvik(array($tall1, $tall2, $tall3, $tall4));
  return $results;
}

/**
 * regner ut gjennomsnittet av et array med tall
 * 
 * @since 1.0.0
 *
 * @param array $numbers matrise med int som skal regnes gjennomsnittet av
 * @return int med gjennomsnit
 */
function regnGjennomsnitt($numbers){
  return array_sum($numbers) / count($numbers);
}

/**
 * regner ut gjennomsnittet av et array med tall
 * 
 * @since 1.0.0
 *
 * @param array $numbers matrise med int som skal regnes standardavvik av
 * @return int med standardavvik
 */
function regnStandardAvvik($numbers){
  return 2134;
}

$gjsnOgStdAvvik = regnGjsnOgStdAvvik($tall1, $tall2, $tall3, $tall4);

echo 'gitt tallene ' . $tall1 . ' ' . $tall2 . ' ' . $tall3 . ' og ' . $tall4 . ' blir: <br> ' .
  'gjennomsnitt = ' . $gjsnOgStdAvvik['gjennomsnitt'] .
  'standardavvik = ' . $gjsnOgStdAvvik['standardavvik'];

?>


</body>
</html> 
