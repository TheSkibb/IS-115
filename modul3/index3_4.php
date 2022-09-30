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

function hvilkeKommune($kommune){
  switch($kommune){
    case "Kristiansand":
    case "Lillesand":
    case "Birkenes":
      echo "Agder";
      break;
    case "Harstad":
    case "Kvæfjord":
    case "Tromsø":
    case "Alta":
      echo "Troms og Finnmark";
      break;
    case "Bergen":
      echo "Vestland";
      break;
    case "Trondheim":
      echo "Trøndelag";
      break;
      case "Bodø";
      echo "Nordland";
      break;
    default:
      echo "ikke registrert";
      break;
  }
  echo "<br>";
}

hvilkeKommune("Kristiansand");
hvilkeKommune("Lillesand");
hvilkeKommune("Birknes");
hvilkeKommune("Harstad");
hvilkeKommune("Trondheim");
hvilkeKommune("asdf");

?>



</body>
</html> 

