<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>harjutus-3</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h2>Muutujad</h2>
<?php
    $variable = 10;
    echo $variable;
    // Lisan veebilehitsejas parema loetavuse saamiseks reamurdmise elemendi:
    echo "<br>";
?>
<?php
    $variable = 20;
    echo $variable;
?>

<h2>Stringid</h2>
<?php echo "Hello world!"; ?>
<br>
<?php
    echo 'Lähme!';
?>
<br>
<?php echo "24"; ?>
<br>
<?php echo "26"; ?>
<br>
<?php echo "2426"; ?>
<br>
<br>
<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
<?php
$student1="Peeter"; 
?>
<?php
$student2="Tiit"; 
?>
<?php
$student3="Toomas"; 
?>
<?php
$student4="Tanel"; 
?>
<?php
$student5="Uno"; 
?>

<ul>
	<?php echo <li><?php
$student2="Tiit"; 
?></li>; ?>
</ul>


</body>
</html>
