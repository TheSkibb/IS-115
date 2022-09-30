 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="" method="post">
<input required type="text" name="name"> fornavn<br>
<input required type="tel" name="phone" placeholder="(+47)" pattern="[0-9]{3} [0-9]{2} [0-9]{3}"> telefon nummer (format: 123 45 678)<br>
<input required type="email" name="mail"> mail test<br>
<input required type="date" name="dob"> fødselsdato<br>
<select required name="gender"> 
  <option value="" selected disabled hidden>velg ...</option>
  <option value="kvinne">kvinne</option>
  <option value="mann">mann</option>
  <option value="annet">annet</option>
</select>
kjønn<br>
<input required type="text" name="occupation"> yrke<br>
<button type="submit" name="sendInfo">send inn!</button>
</form>

<?php

if(isset($_REQUEST['sendInfo'])){
  $info = array(
    'name' =>$_REQUEST['name'], 
    'phone' =>$_REQUEST['phone'], 
    'mail' =>$_REQUEST['mail'], 
    'dob' =>$_REQUEST['gender'], 
    'gender' =>$_REQUEST['dob'], 
    'occupation' =>$_REQUEST['occupation']
  );


  $output = '<h1>Hei ' . $info['name'] . '! </h1>' .
  'Dette er informasjonen vi har om deg, vennligst se at det stemmer <br>' .
  'telefonnummer : ' . $info['phone'] . '<br>' .
  'mail : ' . $info['mail'] . '<br>' .
  'fodselsdato : ' . $info['dob'] . '<br>' .
  'kjonn : ' . $info['gender'] . '<br>' .
  'yrke : ' . $info['occupation'];

  echo $output;
}

?>


</body>
</html> 
