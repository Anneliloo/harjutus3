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
		
		echo "<li>" . $student1 . "</li>";
		echo"<li>" . $student2 . "</li>";
		echo"<li>" . $student3 . "</li>";
		echo"<li>" . $student4 . "</li>";
		echo"<li>" . $student5 . "</li>";
	?>
		
	

</body>

</html>