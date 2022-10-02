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

//bruker samme informasjon som forrige skjema
$info = array(
  'name' =>'kristian',
  'phone' =>'123 45 678',
  'mail' =>'kristian@mail.com',
  'dob' =>'2001-09-06',
  'gender' =>'mann',
  'occupation' => 'student'
);

function isSelected($kjonn, $selected){
  if($kjonn == $selected){
    return ' selected ';
  }
  else{
    return '';
  }
}

if(isset($_REQUEST['sendInfo'])){
  
  $changed = false;
  for($i = 0; $i < count($info); $i++){
    if(array_values($info)[$i] != array_values($_REQUEST)[$i]){
      $changed = true;
    }
    $info[array_keys($info)[$i]] = $_REQUEST[array_keys($info)[$i]];
  }
}

?>

<form action="index4_3.php" method="post">
<input required type="text" name="name" value="<?php echo $info['name'] ?>">fornavn<br>
<input required type="tel" name="phone" value="<?php echo $info['phone'] ?>" placeholder="(+47)" pattern="[0-9]{3} [0-9]{2} [0-9]{3}"> telefon nummer (format: 123 45 678)<br>
<input required type="email" name="mail" value="<?php echo $info['mail'] ?>"> mail test<br>
<input required type="date" name="dob" value="<?php echo $info['dob'] ?>"> fødselsdato<br>
<select required name="gender"> 
  <option value="kvinne" <?php echo isSelected('kvinne', $info['gender']) ?>>kvinne</option>
  <option value="mann"<?php echo isSelected('mann', $info['gender']) ?>>mann</option>
  <option value="annet"<?php echo isSelected('annet', $info['gender']) ?>>annet</option>
</select> kjønn<br>
<input required type="text" name="occupation" value="<?php echo $info['occupation'] ?>"> yrke<br>

<button type="submit" name="sendInfo">send inn!</button>
</form>


<?php
if(isset($_REQUEST['sendInfo'])){
  if($changed){
    echo '<h1>Hei ' . $info['name'] . '! </h1>
    Dette er den nye informasjonen vi har om deg:<br>
    telefonnummer : ' . $info['phone'] . '<br>
    mail : ' . $info['mail'] . '<br>
    fodselsdato : ' . $info['dob'] . '<br>
    kjonn : ' . $info['gender'] . '<br>
    test : ' . $info['occupation'];
  }
  else{
    echo 'du har ikke gjort noen endringer';
  }
}
?>


</body>
</html> 
