<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html";charset=utf-8">
	<title> Muutujad </title>
</head>

<body>
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
	
	<?php 
		// Selles näites on "Hello world!" string, mis koosneb 12 tähemärgist (ka tühik ning hüüumärk on tähemärgid).
		echo "Hello world!"; ?> 
		
<h1>Stringid</h1>
	<?php
		echo "Hello world!";
		echo "<br>"; 
		echo 'Hello again!';
		echo "<br>"; 
	?>
	<?php 
		$variable = 24;
		echo $variable;
		?>
	<?php 
		$variable =26;
		echo $variable;
		?>
	<?php 
		echo "2426"; ?>
	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
	<?php 
		$student1 = "Eve";
		$student2 = "Ingrid";
		$student3 = "Marko";
		$student4 = "Heiko";
		$student5 = "Mihkel";
		$firstname = "Anneli";
		$lastname = "Loo";
		$fullName = $firstname . " " . $lastname;
		echo "<li>" . $student1 . "</li>";
		echo"<li>" . $student2 . "</li>";
		echo"<li>" . $student3 . "</li>";
		echo"<li>" . $student4 . "</li>";
		echo"<li>" . $student5 . "</li>";
		echo"<li>" . $fullName . "</li>";
		$test = "Testmime";
		echo "$test kas interpolatsioon töötab";
		echo "<br>";
		$age = "20";
		echo "Ma olen $age-e aastane";
	?>
		
	<h2>T2isarvud</h2>
	<?php
		$muutuja1 = "4";
		$muutuja2 = "3";
		echo $muutuja1 * $muutuja2;
	?>
<br>
	<?php abs(-300) ?>
<br>
	<?php
    // Viis ruudus:
    echo pow(5, 2);

    // Seitse kuubis:
    echo pow(7, 3);

    // Kolm astmel seitse:
    echo pow(3, 7);
	?> 
<br>
	<?php
    // Ruutjuur 25-st:
    echo sqrt(25);
	?>
<br>
	<?php
    // Suvaline number
    echo rand();
    echo "<br>";
    // Suvaline number vahemikus 7 - 22:
    echo rand(7, 22);
	?>
<br>
	
	<?php
	$sample_nr = 45;
	?>
	<?php
	$sample_nr = 45;
	echo $sample_nr;
	$sample_nr = $sample_nr + 5;
	echo $sample_nr;
	$sample_nr = $sample_nr + 5;
	echo $sample_nr;
	?>
	<?php
    $sample_nr2 = 20;
    $sample_nr2 += 5;
	$sample_nr2 += 5;
    echo $sample_nr2;
	?>
	<?php
    $sample_nr2 = 45;
    $sample_nr2 -= 5;
    echo $sample_nr2;
?>
<?php
    $sample_nr3 = 45;
    $sample_nr3 *= 5;
    echo $sample_nr3;

    $sample_nr2 = 45;
    $sample_nr2 /= 5;
    echo $sample_nr2;
?>
<br>
<?php
    echo 5 . " teksapüksid";
?>
<?php
    echo 5 + " teksapüksid";
?>
<?php
    echo 5 + "5";
?>
<?php
    echo 5 + "7 teksapüksi";
?>
</body>

</html>