<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Forever Home</title>
<?php
include "miniondb_connect.php";
		$petName = mysqli_real_escape_string($db, trim($_POST['minionName']));
		$age = mysqli_real_escape_string($db, trim($_POST['age']));
		$sex = mysqli_real_escape_string($db, trim($_POST['sex']));
		$breed = mysqli_real_escape_string($db, trim($_POST['breed']));
		$color = mysqli_real_escape_string($db, trim($_POST['color']));
		$medical = mysqli_real_escape_string($db, trim($_POST['medical']));
		$fixed = mysqli_real_escape_string($db, trim($_POST['fixed']));
		$vaccines = mysqli_real_escape_string($db, trim($_POST['vaccines']));
		$type = mysqli_real_escape_string($db, trim($_POST['animal']));
		//$picture = mysqli_real_escape_string($db, trim($_POST['picture']));
		//$temp = mysqli_real_escape_string($db, trim($_POST['temp1']));
		echo $petName, $age, $sex, $breed, $color, $medical, $fixed, $vaccines, $type;
		
	//temperment
	
	//$query1 = "INSERT INTO color (color) VALUES ('$color')";
	
	//$query2 = "INSERT INTO breed_id (breed) VALUES ('$breed')";
	
	//$query3 = "INSERT INTO type (animal) VALUES ('$type')";
	
	//$query4 = "INSERT INTO med_conditions (condition) VALUES ('no problems')";
	
	//$query5 = "INSERT INTO temperment(temperment) VALUES ('friendly')";
	
	//$query6 = "INSERT INTO vaccines (vaccine) VALUES ('Rabies')";
	
	$query7 = "INSERT INTO pet_info (owner_id, Name, Age, Sex, fixed) 
	VALUES ( LAST_INSERT_ID(), '$petName', '$age', '$sex', '$fixed')";
	
	
	
	echo $query7;
	//$query1,$query2,$query3,//$query4,$query5,$query6,
	//$query7;
	/*
	$result1 = mysqli_query($db, $query1)
        or die("Error Querying Database");
		
		$result2 = mysqli_query($db, $query2)
        or die("Error Querying Database");
		
		$result3 = mysqli_query($db, $query3)
        or die("Error Querying Database");
		
		
		$result4 = mysqli_query($db, $query4)
        or die("Error Querying Database");
		
		$result5 = mysqli_query($db, $query5)
        or die("Error Querying Database");
		
		$result6 = mysqli_query($db, $query6)
        or die("Error Querying Database");
		*/
		$result7 = mysqli_query($db, $query7)
        or die("Error Querying Database");
?>
</head>
<body>
</body>
</html>