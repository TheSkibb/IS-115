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

require_once "./PHPMailer/src/PHPMailer.php";
require_once "./PHPMailer/src/Exception.php";
require_once "./PHPMailer/src/SMTP.php";

$mail = new PHPMailer\PHPMailer\PHPMailer();
$fnavn = "Kristian";
$enavn = "Skibrek";
$kode = "abc";
$epost = "skybreakman@gmail.com";

try {
  //mld skal inneholde:
  //logo
  //nyheter med lenker
  //footer med info for bedrift
  $mld = '
<h2>flowerpower PHP nyhetsbrev</h2>
<img src="https://img.freepik.com/free-photo/purple-osteospermum-daisy-flower_1373-16.jpg?w=2000" width="150px">
<br>
<b>ukas nyheter</b>
<ul>
  <li><a href="https://www.php.net/">phps nettside er oppdatert</a></li>
  <li><a href="https://www.jobsity.com/blog/8-reasons-why-php-is-still-so-important-for-web-development">php er kult</a></li>
  <li><a href="https://survey.stackoverflow.co/2022/#section-most-popular-technologies-other-tools">tack overflow survey viser at php ikke er kult</a></li>
  <li><a href="https://www.php.net/releases/index.php">nyeste php release</a></li>
</ul>
<footer style="background-color: grey">
  <i>flowerpower PHP er en fiktiv organisasjon som sender nyhetsbrev om PHP nyheter</i><br><br>
  kontakt info: <br>
  <a href="">facebook</a>
  <a href="">twitter</a>
  <a href="">instagram</a>
</footer>
  ';
  $amld = "dette vil ikke fungere uten html email";

  $mail->IsSMTP();
  $mail->SMTPDebug = 1;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls";
  $mail->Host = "smtp.gmail.com";
  $mail->port = 25;
  $mail->Username = "examplebrukerforphp@gmail.com";
  $mail->Password = "bxpmgqvyejaiiocm";
  $mail->isHTML(true);
  $mail->From = "examplebrukerforphp@gmail.com";
  $mail->FromName = "kristian";
  $mail->addAddress($epost, $fnavn . " " . $enavn);
  $mail->Subject = "nyhetsbrev";
  $mail->Body = $mld;
  $mail->AltBody = $amld;
  $mail->send();
  echo "epost er sendt";

} catch (Exception $e){
  echo "noe gikk galt" . $e->getMessage();
}
?>
  </body>
</html>
