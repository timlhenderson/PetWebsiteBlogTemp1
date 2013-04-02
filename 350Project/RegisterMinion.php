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
session_start();
include "miniondb_connect.php";
	
	if (isset($_POST['minionName'])) {
		$minionName = mysqli_real_escape_string($db, trim($_POST['minionName']));
		$age = mysqli_real_escape_string($db, trim($_POST['age']));
		$sex = mysqli_real_escape_string($db, trim($_POST['sex']));
		$breed = mysqli_real_escape_string($db, trim($_POST['breed']));
		$color = mysqli_real_escape_string($db, trim($_POST['color']));
		$condition = mysqli_real_escape_string($db, trim($_POST['medical']));
		$type = mysqli_real_escape_string($db, trim($_POST['animal']));
		$fixed = mysqli_real_escape_string($db, trim($_POST['fixed']));
		$vaccines = mysqli_real_escape_string($db, trim($_POST['vaccines']));
		$temperment = mysqli_real_escape_string($db, trim($_POST['temp']));
		$size = mysqli_real_escape_string($db, trim($_POST['size']));
		$picture = mysqli_real_escape_string($db, trim($_POST['uploadPicture']));
		
		
		$query2 = "INSERT INTO color (color) VALUES ('$color')";
		
		$query3 = "INSERT INTO vaccines(vaccine) VALUES ('$vaccines')";
		
		$query5 = "INSERT INTO temperment(temperment) VALUES ('$temperment')";
		
		$query6 = "INSERT INTO type (animal) VALUES ('$type')";
		
		$query7 = "INSERT INTO breed_id (breed) VALUES ('$breed')";
		
		$query8 = "INSERT INTO picture (picture) VALUES ('$picture')";
		
		$query9 = "INSERT INTO pet_size (size) VALUES ('$size')";
		
		$query1 = "INSERT INTO pet_info (owner_id, Name, Age, Sex, fixed,temp_id, type_id, breed_id, size_id, pic_id, med_id) 
			VALUES ('{$_SESSION['owner_id']}', '$minionName', '$age', '$sex', '$fixed', LAST_INSERT_ID(),
			LAST_INSERT_ID(), LAST_INSERT_ID(), LAST_INSERT_ID(), LAST_INSERT_ID(), LAST_INSERT_ID())";

		$result2 = mysqli_query($db, $query2)
			or die("Error Querying Database");
			
		$result3 = mysqli_query($db, $query3)
			or die("Error Querying Database");

		$result5 = mysqli_query($db, $query5)
			or die("Error Querying Database");
			
		$result6 = mysqli_query($db, $query6)
			or die("Error Querying Database");
			
		$result7 = mysqli_query($db, $query7)
			or die("Error Querying Database");
			
		$result8 = mysqli_query($db, $query8)
			or die("Error Querying Database");
			
		$result9 = mysqli_query($db, $query9)
			or die("Error Querying Database");
			
		$result1 = mysqli_query($db, $query1)
			or die("Error Querying Database");
			
		}
		
	    ?>
		
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logo">
	<h1><a href="#">Forever <i> Home</i></a></h1>
</div>
<div id="content">
	<div id="sidebar">
		<div id="menu">
			<ul>
				<li><a href="Home.php" title="">Homepage</a></li>
				<li><a href="aboutUs.php" title="About Us">About Us</a></li>
				<li><a href="RegisterOwner.php" title="">Register</a></li>
				<li><a href="adopt.php" title="">Adopt a Minion</a></li>
				<li class="active"><a href="RegisterMinion.php" title="">Place a Minion for Adoption</a></li>
				
				</br>
				</br>
				</br>
				</br>
				
				<p><img src="images/pets4.jpg" alt="" width="240" height="170" /></p>
			</ul>
		</div>
		</div>
	<div id="main">
		<div id="Register your Minion" class="post">
			<p><img src="images/pets2.jpg" alt="" width="500" height="300" /></p>


			<h1 class="title">Place a minion up for adoption.</h1>
			<!-- Place minion -->		
			
			<p>Please fill in the following fields. Provide sufficient information to 
			ensure your minion finds the right home.</p>
			
			<form method = "post" action = "RegisterMinion.php">
					<table>
					<tr><td>Minion name: </td><td><input type="text" id="minionName" name="minionName" /></td></tr>
					<tr><td>Age</td><td>
					<select name="age" id="age">
                                        <option value="">Any</option>
                                        <option value="young">Young</option>
                                        <option value="adult">Adult</option>
                                        <option value="senior">Senior</option>
                                        <option value="puppy">Puppy </option>
                                      </select></td></tr>
					<tr><td>Sex</td><td>
					<select name="sex" id="sex">
                                        <option selected="selected" value="">Any</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                      </select></td></tr>
					<tr><td>Size</td><td>
					<select name="size" id="size">
                                        <option value="" selected="selected">Any</option>
                                        <option value="1|Small 25 lbs (11 kg) or less">Small 25 lbs (11 kg) or less</option>
                                        <option value="2|Med. 26-60 lbs (12-27 kg)">Med. 26-60 lbs (12-27 kg)</option>
                                        <option value="3|Large 61-100 lbs (28-45 kg)">Large 61-100 lbs (28-45 kg)</option>
                                        <option value="4|X-Large 101 lbs (46 kg) or more">X-Large 101 lbs (46 kg) or more</option>
                                      </select></td></tr>
					<tr><td>Breed</td><td><input type="text" id="breed" name="breed"/></td></tr>
					<tr><td>Color</td><td><input type="text" id="color" name="color"/></td></tr>
					<!--<tr><td>Type</td><td><input type="text" id="type" name="type"/></td></tr>-->
					<tr><td>Does your minion currently have any medical conditions? Please explain.</td><td>
					<textarea id="medical" name="medical" cols="30" rows="6"></textarea></td></tr>
					<div id="animal_options" class="checkbox_list animal_list">
					<tr><td>Type:</td>
					<td><input class="dog_breed" id="dog-label" type="radio" name="animal" value="dog" checked="checked">
						<label for="dog-label">Dog</label>
					<input class="cat_breed" id="cat-label" type="radio" name="animal" value="cat">
						<label for="cat-label">Cat</label>
					<input class="exotic_breed" id="exotic-label" type="radio" name="animal" value="exotic">
						<label for="exotic-label">Exotic</label>
				</div>
					<tr><td>Is your minion spayed or neutered? </td>
					<td><select name="fixed" style="width:144px">
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select></td></tr>
					<tr><td>Is your minion current on vaccines? </td>
					<td><select name="vaccines" style="width:144px">
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select></td></tr>
					<tr></tr><tr></tr>
					
					<tr><td>Please provide us some information about your pets temperment/personality. Ex. Good with Children. Energetic.</td><td>
					<textarea id="temp" name="temp" cols="30" rows="6"></textarea></td></tr>
					
				<tr><td>Upload Picture: </td><td><form name="picture" action="" method="post">
					<input type="file" name="uploadPicture" />
				</form></td></tr>
					
					<tr><td>&nbsp;</td><td><input type="submit" value="Register Minion" /></td></tr>
					</table>
					
					</form>
			
			</div>
	</div>
</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2013 Forever Home. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
</body>
</html>
