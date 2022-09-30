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
  'phone' =>'12345678',
  'mail' =>'kristian@mail.com',
  'dob' =>'2001-09-06',
  'gender' =>'mann',
  'occupation' => 'student'
);

function generateSelect($selected){
  $options = array('mann', 'kvinne', 'annet');
  $output = '';
  for($i = 0; $i < count($options); $i++){
    $output .= '<option value="'
      . $options[$i] . '"';
    $output .= ($options[$i] == $selected) ? '>' : 'selected="' . $options[$i] . '">';
    $output .= $options[$i] .'</option>';
  }
  return $output;
}

?>

<form action="index4_2.php" method="post">
<input required type="text" name="name" value="<?php echo $info['name'] ?>">fornavn<br>
<input required type="tel" name="phone" value="<?php echo $info['phone'] ?>" placeholder="(+47)" pattern="[0-9]{3} [0-9]{2} [0-9]{3}"> telefon nummer (format: 123 45 678)<br>
<input required type="email" name="mail" value="<?php echo $info['mail'] ?>"> mail test<br>
<input required type="date" name="dob" value="<?php echo $info['dob'] ?>"> fødselsdato<br>
<select required name="gender"> 
  <?php
    echo generateSelect('kvinne');
  ?>
</select> kjønn<br>
<input required type="text" name="occupation" value="<?php echo $info['occupation'] ?>"> yrke<br>
<button type="submit">send inn!</button>
</form>


</body>
</html> 
