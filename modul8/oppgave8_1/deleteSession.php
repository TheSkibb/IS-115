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

session_start();
session_destroy();
header("Location: ./logginn.php");
exit();
?>
  </body>
</html>
