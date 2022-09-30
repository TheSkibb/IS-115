 <!DOCTYPE html>
<html>
<head>
<title>oppgave 2</title>
</head>
<body>


<?php

$etternavn = 'nordmann <p>skummel html kode</p> <?php echo "skummel php kode" ?>';

//antar at det menes at innholdet i den potensielle koden også skal fjernes
function removeHTML($etternavn){
  return strip_tags($etternavn);
}

function strip_tags_content($text) {

    $text = preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
    return preg_replace('@<(\?)\b.*?>@si', '', $text);
    
 }

echo "<br>" . strip_tags_content($etternavn);
echo "<br>" . strip_tags($etternavn);
?>


</body>
</html> 
