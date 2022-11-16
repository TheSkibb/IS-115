<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>
  <body>
<?php
/*
oppgave 10_3: https://rapidapi.com/darkskyapis/api/dark-sky/
dette er en åpen og veldig populær vær api, den kan være veldig nyttig om man 
lager en nettside og man vil integrere værmeldinger eller bruke værdata som vind,
vær, lufttrykk eller luftkvalitet. APIen kan gi en hel haug forskjellige vær-
relaterte data
og oversettelser til norsk (og mange andre språk) er tilgjengelig.
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//map api fra https://apidocs.geoapify.com/docs/maps/static/#about
$url = 
'https://maps.geoapify.com/v1/staticmap?
style=osm-bright&
width=600&
height=400&
center=lonlat:8.000082,58.16218&
zoom=14.5733&
apiKey=e2575c741b0d4f948eaf20658613010f';

echo 'her er leiligheten din:<br>';
echo '<img src="' . $url . '" width="400px">';
//$foto = json_decode($resultat, true);
//

?>
  </body>
</html>
