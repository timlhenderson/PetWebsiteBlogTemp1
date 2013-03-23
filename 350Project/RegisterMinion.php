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
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>

<script>
	function matchPasswords(){
		
		var pass1 = document.getElementById("password").value;
		var pass2 = document.getElementById("check").value;
		
		if(pass1 != pass2) {
			alert ("Uh oh, passwords don't match! Please re-enter your passwords.");
			}
		}
</script>
			

	<!--function checkMe(){
		include "miniondb_connect.php";
		$uName = mysqli_real_escape_string($db, trim($_POST['username']));
		$query = "SELECT COUNT(*) FROM credentials WHERE username = '$uName'";
	   
	   $result = mysqli_query($db, $query)
         or die("Error Querying Database");
		 
		 if(mysql_num_rows($result) > 0){
			echo 'Username exists! Please choose another user name.';
			}
		 
		}
		
	-->

<div id="logo">
	<h1><a href="#">Forever <i> Home</i></a></h1>
	<h2><span>By Free CSS Templates</span></h2>
</div>
<div id="content">
	<div id="sidebar">
		<div id="menu">
			<ul>
				<li><a href="index.php" title="">Homepage</a></li>
				<li><a href="#" title="">About Us</a></li>
				<li><a href="RegisterOwner.php" title="">Register</a></li>
				<li class="active"><a href="findMinion.php" title="">Find a Minion</a></li>
				<li class="active"><a href="findMinion.php" title="">Adopt a Minion</a></li>
				<li><a href="#" title="">Support</a></li>
			</ul>
		</div>

		</div>
<div id="main">
		<div id="Register Minion" class="post">

		
	</div>
	<div id="main">
		<div id="Register Your Minion" class="post">

			<p><img src="images/pets2.jpg" alt="" width="500" height="300" /></p>
			<h1 class="title">Place a minion up for adoption.</h1>
			<!-- Place minion -->		
			
			<p>Please fill in the following fields. Provide sufficient information to 
			ensure your minion finds the right home.</p>
			
			<form method = "post" action = "minionInfo.php">
					<table>
					<tr><td>Minion name: </td><td><input type="text" id="minionName" name="minionName" /></td></tr>
					<tr><td>Age</td><td><input type="text" id="age" name="age"/></td></tr>
					<tr><td>Sex</td><td><input type="text" id="sex" name="sex"/></td></tr>
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
					<tr><td>Temperment: </td><td>
				<input type="checkbox" name="temp1" value="unknown">&nbsp;Unknown
				<input type="checkbox" name="temp1" value="children">&nbsp;Good with children</td></tr>
				<tr><td></td><td><input type="checkbox" name="temp1" value="dogs">&nbsp;Good with dogs
				<input type="checkbox" name="temp4" value="cats">&nbsp;Good with cats</td></tr>
				<tr><td></td><td><input type="checkbox" name="temp5" value="allpets">&nbsp;Good with all pets
				<input type="checkbox" name="temp6" value="friendly">&nbsp;Friendly</td></tr>
				<tr><td></td><td><input type="checkbox" name="temp7" value="timid">&nbsp;Timid
				<input type="checkbox" name="temp8" value="energetic">&nbsp;Energetic
				<input type="checkbox" name="temp9" value="fearful">&nbsp;Fearful</td></tr>
				<tr><td></td><td><tr><td></td><td><tr><td></td><td><tr><td></td><td>
				<tr><td>Upload Picture: </td><td><form name="picture" action="" method="post">
					<input type="file" name="uploadPicture" />
				</form></td></tr>
					
					<tr><td>&nbsp;</td><td><input type="submit" value="Register Minion" /></td></tr>
					</table>
					
					</form>
			
			</div>
	</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2013 Forever Home. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
