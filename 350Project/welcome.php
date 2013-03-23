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
	   //echo $query;
	   $query2 = "SELECT ownercontactinfo.First FROM ownercontactinfo JOIN credentials 
	   WHERE credentials.username = '$uName' AND credentials.password = '$encryptedPW' 
	   AND credentials.owner_id = ownercontactinfo.owner_id";
	   //echo $query2;
		$result = mysqli_query($db, $query)
         or die("Error Querying Database");
		 
		 $result2 = mysqli_query($db, $query2)
         or die("Error Querying Database");
		 
		 if ($row = mysqli_fetch_array($result2)){
			 $_SESSION['owner_name'] = $row['First'];
			 //echo $_SESSION['owner_name'];
         }
		 
		 if ($row = mysqli_fetch_array($result))
         {
		 $pword = $row['password'];
  		 $user = $row['username'];
		 //$id = $row['owner_id'];
		 $_SESSION['owner_id'] = $row['owner_id'];
		 //setcookie("ZipCode", $row['zipcode'], time() + 3600 * 24); 
		 echo '<META http-equiv="refresh" content="0;URL=welcome.php">';
		 //echo $_SESSION['owner_id'];
		}
		
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
				<li class="active"><a href="index.php" title="">Homepage</a></li>
				<li><a href="#" title="">About Us</a></li>
				<li><a href="RegisterMinion.php" title="">Place Minion for Adoption</a></li>
				<li><a href="#" title="">Find a Minion</a></li>
				<li><a href="#" title="">Adopt a Minion</a></li>
				<li><a href="#" title="">Support</a></li>
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
		}
		?>
			</div>
		
		</div>
	</div>
</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2013 Forever Home. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>