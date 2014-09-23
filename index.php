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
	$student1 = 'Jaan';
	$student2 = 'Jaanus';
	$student3 = 'Joonas';
	$student4 = 'Mari';
	$student5 = 'Maria';
	$firstName = 'Jason Max';
	$lastName = ' Värk';
	$fullName = $firstName . $lastName;

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
	<li>
	<?php echo $fullName; 
	?>
	</li>

</ul>
<?php
$test = "Testime";
echo "$test kas interpolatsioon töötab";
echo "<br>";
$katse = "proov";
echo "Me peame {$katse}ima, kas ka ka nii saab.";
	$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
	$upper = strtoupper($source);
	echo "<p>{$upper}</p>";
$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
$first = ucfirst($source);
echo "<p>{$first}</p>";
	$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
	$words = ucwords($source);
	echo "<p>{$words}</p>";
$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
$len = strlen($source);
echo "<p>{$len}</p>";
	$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
	$trim = trim($source);
	echo "<p>{$trim}</p>";




?>
<h2>Täisarvud</h2>
<?php
$nr1 = 5;
$nr2 = 10;

echo ($nr1 + $nr2)* "10";
?>
</body>
</html>
