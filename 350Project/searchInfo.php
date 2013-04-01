<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Forever Home</title>
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
				<li><a href="RegisterMinion.php" title="">Place a Minion for Adoption</a></li>
			</ul>
		</div>
		</div>
<div id="main">
		<div id="Results" class="post">
			<p><img src="images/pets2.jpg" alt="" width="500" height="300" /></p>
			<h1 class="title">Results</h1>
			<!-- Results -->		
			
			<?php
			include "miniondb_connect.php";
				$zip = mysqli_real_escape_string($db, trim($_POST['zipcode']));
				$type = mysqli_real_escape_string($db, trim($_POST['animal']));
				$sex = mysqli_real_escape_string($db, trim($_POST['sex']));
				$breed = mysqli_real_escape_string($db, trim($_POST['breed']));
				$temperment = mysqli_real_escape_string($db, trim($_POST['temp']));

				echo $zip, $type, $sex, $breed, $temperment;
				
				$query = "INSERT INTO ownercontactinfo (First, Last, Phone, email) 
				VALUES ('$firstName', '$lastName', '$phone', '$email')";

				?>
			</div>
	</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2013 Forever Home. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
</body>
</html>