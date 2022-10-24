<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action="oppgave7_2.php" method="post">
<input required type="text" name="name"> fornavn<br>
<input required type="tel" name="phone" placeholder="(+47)" pattern="[0-9]{3} [0-9]{2} [0-9]{3}"> telefon nummer (format: 123 45 678)<br>
<input required type="email" name="mail"> mail test<br>
<input required type="date" name="dob"> fødselsdato<br>
<select required name="gender" > 
  <option value="" selected disabled hidden>velg ...</option>
  <option value="kvinne">kvinne</option>
  <option value="mann">mann</option>
  <option value="annet">annet</option>
</select> kjønn<br>
<input required type="text" name="occupation"> yrke<br>
<button type="submit" name="sendInfo">send inn!</button>
</form>

<?php
include('./database.inc.php');

if(isset($_REQUEST['sendInfo'])){
  $info = array(
    'name' =>$_REQUEST['name'], 
    'phone' =>$_REQUEST['phone'], 
    'mail' =>$_REQUEST['mail'], 
    'gender' =>$_REQUEST['gender'], 
    'dob' =>$_REQUEST['dob'], 
    'occupation' =>$_REQUEST['occupation']
  );

  print_r($info);

  $sql = "insert into user (
      name,
      telephone,
      email,
      dob,
      gender,
      occupation) 
  values(
      :name,
      :telephone,
      :email,
      :dob,
      :gender,
      :occupation
    )";

  $sp = $pdo->prepare($sql);

  $sp->bindParam(':name', $name, PDO::PARAM_STR);
  $sp->bindParam(':telephone', $telephone, PDO::PARAM_STR);
  $sp->bindParam(':dob', $dob, PDO::PARAM_STR);
  $sp->bindParam(':email', $email, PDO::PARAM_STR);
  $sp->bindParam(':gender', $gender, PDO::PARAM_STR);
  $sp->bindParam(':occupation', $occupation, PDO::PARAM_STR);

  $name = $info['name'];
  $telephone = $info['phone'];
  $dob = $info['dob'];
  $email = $info['mail'];
  $gender = $info['gender'];
  $occupation = $info['occupation'];

  try{
    $sp->execute();
  }
  catch(PDOException $e){
    echo $e->getMessage() . "<br>";
  }

}
?>


</body>
</html> 
