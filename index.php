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
    echo "<br>"; ?>
    <?php
    $variable = 20;
    echo $variable;	
	?>
<h2>Stringid</h2>
<?php echo "Hello world!"; 
echo "<br>"; 
?>
<?php echo 'Tere maailm!'; 
echo "<br>"; 
?>
<?php echo "24"; 
echo "<br>"; 
?>
<?php echo "26"; 
echo "<br>"; 
?>
<?php echo "2426"; ?>
<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
<?php 
	$student1 = 'Jaan' . $fullname ' Värk';
	$student2 = 'Jaanus';
	$student3 = 'Joonas';
	$student4 = 'Mari';
	$student5 = 'Maria';

?>
<ul>
	<li>
	<?php echo $student1; 
	?>
	</li>
<li>
	<?php echo $student2; 
	?>
	</li>
<li>
	<?php echo $student3; 
	?>
	</li>
<li>
	<?php echo $student4; 
	?>
	</li>
<li>
	<?php echo $student5; 
	?>
	</li>

</ul>
</body>
</html>
