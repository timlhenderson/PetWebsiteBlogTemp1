<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "\http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
	
</div>

<div id="content">
	<div id="sidebar">
		<div id="menu">
			<ul>
				<li class="active"><a href="Home.php" title="">Homepage</a></li>
				<li><a href="aboutUs.php" title="About Us">About Us</a></li>
				<li><a href="RegisterOwner.php" title="">Register</a></li>
				<li><a href="adopt.php" title="">Adopt a Minion</a></li>
				<li><a href="RegisterMinion.php" title="">Place a Minion for Adoption</a></li>
			</ul>
		</div>
		<div id="login" class="boxed">
		
			<h2 class="title">User Account</h2>
		
			<div class="content">
			
			
			<?php
				if (isset($_POST['name'])) {
				//session_destroy();
				echo "<h2>Incorrect Username/Password</h2>";
				}
				
			?>
				<form id="form1" method="post" action="Home.php">
					<fieldset>
					
					<label for="inputtext1">User ID:</label>
					<input id="inputtext1" type="inputtext1" name="name"/>									
					<label for="inputtext2">Password:</label>
					<input id="inputtext2" type="password" name="password" value="" />
					<input type="submit" name="submit" value="Sign In"/>
					<!--<p><a href="#">Forgot your password?</a></p>-->
					</fieldset>
					
					</br>
					</br>
					<p><img src="images/petpic.jpg" alt="" width="240" height="170" /></p>
					
					</form>
					
				
			</div>
		</div>
		<div id="updates" class="boxed">
			<!--<h2 class="title">Recent Updates</h2>-->
			<div class="content">
				<ul>
					<li>
						
					</li>
					<li>
						
					</li>
					<li>
						
					</li>
					<li>
						
					</li>
					<li>
						
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="main">
		<div id="welcome" class="post">
			<p><img src="images/pets2.jpg" alt="" width="500" height="300" /></p>
			
			<!-- Questions to ask before adopting-->
			<h2 class="title">Questions to Ask Yourself </br> Before Adopting</h2>
			<h3 class="date"><span class="month">Mar.</span> <span class="day">31</span><span class="year">, 2013</span></h3>
			<div class="meta">
				<p>Posted from <a href= "http://www.aspca.org "> http://www.aspca.org</a></p>
			</div>
			<div class="story">
			
<div class="module">    
        <p>Congratulations! By visiting Forever Home, you've taken your first step toward responsible pet ownership. Caring for a companion animal goes far beyond providing food, water and shelter. It takes research and careful planning to bring the right pet into your home, and to make sure your lifestyle is the right one for your pet. Answering the following questions will get you started. </p>
		<p><a href="http://localhost/PetWebsiteBlogTemp/350Project/adoptionQuestions.php">Continue reading article here.</a>
</div>
</div>

		<!--Finding responsible pet home-->
		<h2 class="title">Finding a Responsible </br> Home for Your Pet </h2>
		<h3 class="date"><span class="month">Mar.</span> <span class="day">31</span><span class="year">, 2013</span></h3>
		<div class="meta">
			<p>Posted from <a href= "http://www.humanesociety.org ">http://www.humanesociety.org</a></p>
		</div>
			<div class="story">
			
<div class="module">    
			<p>Do you feel you can no longer keep your pet and want to find a new home for him or her? Perhaps you are frustrated with a behavior problem. Or your child has pet allergies. Or you are having trouble finding rental housing that accepts your pet.</p>
			<p><a href="http://localhost/PetWebsiteBlogTemp/350Project/findHome.php">Continue reading article here.</a>
</div>
</div>
<!--Spay/Nueter article-->
		<h2 class="title">Why Spay and Neuter </br> Your Companion Animals </h2>
		<h3 class="date"><span class="month">Mar.</span> <span class="day">31</span><span class="year">, 2013</span></h3>
		<div class="meta">
			<p>Posted from <a href= "http://www.paws.org ">http://www.paws.org</a></p>
		</div>
			<div class="story">
			
<div class="module">    
	<h2>It's a lifesaver</h2>
	<p>It's no myth, there is an overpopulation of unwanted pets nationwide and in our state. Every year more than 150,000 dogs and cats end up homeless in Washington State shelters, and sadly there are just not enough people who adopt from those shelters.</p>
	<p>Some animals in shelters are saved from the streets and cruelty, while some are given up by their families. Countless others never make it to shelters and suffer without someone to care for them. Spaying or neutering pets prevents animals from being born accidentally, and is the most effective and humane way to save animals lives.</p>			
<p><a href="http://localhost/PetWebsiteBlogTemp/350Project/neuter.php">Continue reading article here.</a>
</div>
</div>
				
				
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2013 Forever Home. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
</body>
</html>
