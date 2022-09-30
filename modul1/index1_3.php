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

$alder = 21;
$navn = "kristian";

print($alder2)
?>

<table>
    <tr>
        <th>navn</th>
        <th>alder</th>
    </tr>
    <tr>
        <td><?php echo $navn ?></td>
        <td><?php echo $alder ?></td>
    </tr>
</table>

<ol>
    <li><?php echo $navn ?></li>
    <li><?php echo $alder ?></li>
</ol>

<p>
<?php 
    echo $navn, $alder
?>
</p>

</body>
</html> 
