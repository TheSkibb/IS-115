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

if(isset($_REQUEST['sendMail'])){
  $navn = $_REQUEST['fra'];
  $email = $_REQUEST['email'];
  $emne = $_REQUEST['emne'];
  $innhold = $_REQUEST['innhold'];
  
  require_once "./PHPMailer/src/PHPMailer.php";
  require_once "./PHPMailer/src/Exception.php";
  require_once "./PHPMailer/src/SMTP.php";

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $fnavn = "Kristian";
  $enavn = "Skibrek";
  $kode = "abc";
  $epost = "skybreakman@gmail.com";

  try {
    $mld = '
    melding sendt fra ' . $navn . ' ' . $email . '
    innhold:' . $innhold;
    $amld = $mld;

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
    $mail->Subject = $emne;
    $mail->Body = $mld;
    $mail->AltBody = $amld;
    $mail->send();
    echo "epost er sendt";
  
  } catch (Exception $e){
    echo "noe gikk galt" . $e->getMessage();
  }
}
else{
  echo '
    <form method="post" action="./oppgave10_1.php">
      <input type="text" name="fra" placeholder="hvem sender mailen" required><br>
      <input type="email" name="email" placeholder="epostaddresse" required><br>
      <input type="text" name="emne" placeholder="emne" required><br>
      <input type="text" name="innhold" placeholder="innhold" required><br>
      <button type="submit" name="sendMail">send mail!</button> <br>
    </form>
  ';
}
?>
  </body>
</html>
