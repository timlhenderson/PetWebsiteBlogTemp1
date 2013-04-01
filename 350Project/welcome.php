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

	if (isset($_POST['name']) && isset($_POST['password'])){
	   $uName = mysqli_real_escape_string($db, trim($_POST['name']));
	   $pwd = mysqli_real_escape_string($db, trim($_POST['password']));
	   $encryptedPW = sha1($pwd);
	   
	   $query = "select * from credentials WHERE username = '$uName' AND password = '$encryptedPW'";

	   $query2 = "SELECT ownercontactinfo.First FROM ownercontactinfo JOIN credentials 
	   WHERE credentials.username = '$uName' AND credentials.password = '$encryptedPW' 
	   AND credentials.owner_id = ownercontactinfo.owner_id";
	   
		 $result = mysqli_query($db, $query)
         or die("Error Querying Database");
		 
		 $result2 = mysqli_query($db, $query2)
         or die("Error Querying Database");
		 
		 if ($row = mysqli_fetch_array($result2)){
			 $_SESSION['owner_name'] = $row['First'];
			 
         }
		 
		 if ($row = mysqli_fetch_array($result))
         {
		 $pword = $row['password'];
  		 $user = $row['username'];
		 $_SESSION['owner_id'] = $row['owner_id'];
		 //setcookie("ZipCode", $row['zipcode'], time() + 3600 * 24); 
		 //echo '<META http-equiv="refresh" content="0;URL=welcome.php">';
		 
		}
		/*
		$query3 = "SELECT zip FROM location WHERE owner_id =" . $SESSION['owner_id'];
		
		echo $query3;
	   
		 $result3 = mysqli_query($db, $query3)
         or die("Error Querying Database");
		 
		 if ($row = mysqli_fetch_array($result3)){
			$_SESSION['zipcode'] = $row['zip'];
		 }*/
      }
?>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logo">
	<h1><a href="#">Forever <i> Home</i></a></h1>
	<h2><span>By Free CSS Templates</span></h2>
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
			</ul>
		</div>
		</div>
	<div id="main">
	<div id="Register your Minion" class="post">
			<p><img src="images/pets2.jpg" alt="" width="500" height="300" /></p>
		<!--Welcome-->
		
		<?php
		if(isset($_SESSION['owner_name'])) {
		echo "<h1>Welcome " . $_SESSION['owner_name']  . " !</h1>\n";
		//echo "<h1>Your zipcode is " . $_SESSION['zipcode'] . " !</h1>\n";
		
		}
		?>
		
			</div>
		
		</div>
	</div>
</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2013 Forever Home. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
</body>
</html>