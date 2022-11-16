<!DOCTYPE html>
<html>
<head>
  <title>oppgave3</title>
</head>
<body>

    
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//brukerens primary key 
$bruker = '1234';

if(isset($_REQUEST['lastOppBilde'])){
  if(is_uploaded_file($_FILES['bilde']['tmp_name'])){
    $suksess = true;

    //sjekk at fil er riktig type
    $filtyper = array('jpg'=>"image/jpeg", 'png'=>"image/png");
    $filtype = $_FILES['bilde']['type'];
    if(!in_array($filtype, $filtyper)){
      echo 'kun jpg og png er tillatt <br>';
      $suksess = false;
    }
    //max størrelse er 2mb
    $maxStr = 2 * 1024 * 1024;
    $filStr = $_FILES['bilde']['size'];
    if($filStr > $maxStr){
      echo 'filen er for stor maks størrelse er ' . $maxStr . ' din fil er ' . $_FILES['bilde']['size'] . ' bytes<br>';
      $suksess = false;
    }

    //om ikke noe feil har skjedd så prøv å laste opp filen
    if($suksess){
      if($_FILES['bilde']['type'] == 'image/jpeg'){
        $bildeNavn = $bruker . '.jpg';
      }
      else{
        $bildeNavn = $bruker . '.png';
      }
      //move_uploaded_file returnerer en boolean som viser om flyttingen av filen var en suksess
      $opplastetFil = move_uploaded_file($_FILES['bilde']['tmp_name'], "./files/" . $bildeNavn);

      if($opplastetFil){
        echo 'filen din har blitt lastet opp';
      }
      else{
        echo 'noe feil sjedde, vennligst prøv på nytt';
      }
    }
  }
}
  
?>

<!-- form for å laste opp bilde -->
<form method="post" action="oppgave9_3.php?bruker=<?php echo $bruker ?>" enctype="multipart/form-data">
  <input type="file" name="bilde" size="20">
  <button type="submit" name="lastOppBilde" value="lastOppBilde">last opp bilde</button>
</form>

<?php

echo($bruker . ".jpg");
$bilde = $bruker . (file_exists('./files/' . $bruker . ".jpg")? ".jpg" : ".png");
echo '
  <br><br><br>
  <div>
  <h3>din profil<h3>
  <img src="files/' . $bilde . '" width="100px">
  </div>
';
  
?>

</body>
</html>

