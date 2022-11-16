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


//om ikke de riktige session variablene finnes send brukeren tilbake til 
//innloggingssiden sammen med et query parameter
session_start();
if(!isset($_SESSION['bruker']['innlogget']) 
  || $_SESSION['bruker']['innlogget'] == 0){

  echo 'test <br>';
  header("Location: ./logginn.php?accessDenied");
  exit();
}

echo 
'<h1> Velkommen til din side ' . 
  $_SESSION['bruker']['navn'] . 
'</h1>' .
'<a href="./deleteSession.php"><button>logg ut</button></a>';

?>
  </body>
</html>
