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
	<h2><span>By Free CSS Templates</span></h2>
</div>

<div id="content">
	<div id="sidebar">
		<div id="menu">
			<ul>
				<li class="active"><a href="index.php" title="">Homepage</a></li>
				<li><a href="#" title="">About Us</a></li>
				<li><a href="RegisterOwner.php" title="">Register</a></li>
				<!--<li><a href="Adoption.php" title="">Place Minion for Adoption</a></li>
				<li><a href="Search.php" title="">Find a Minion</a></li>
				<li><a href="#" title="">Adopt a Minion</a></li>-->
				<!--<li><a href="#" title="">Support</a></li>-->
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
				<form id="form1" method="post" action="index.php">
					<fieldset>
					
					<label for="inputtext1">User ID:</label>
					<input id="inputtext1" type="inputtext1" name="name"/>									
					<label for="inputtext2">Password:</label>
					<input id="inputtext2" type="password" name="password" value="" />
					<input type="submit" name="submit" value="Sign In"/>
					<p><a href="#">Forgot your password?</a></p>
					</fieldset>
					</form>
					
				
			</div>
		</div>
		<div id="updates" class="boxed">
			<h2 class="title">Recent Updates</h2>
			<div class="content">
				<ul>
					<li>
						<h3>March 5, 2007</h3>
						<p><a href="#">In posuere eleifend odio quisque semper augue mattis wisi maecenas ligula&#8230;</a></p>
					</li>
					<li>
						<h3>March 3, 2007</h3>
						<p><a href="#">Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh&#8230;</a></p>
					</li>
					<li>
						<h3>February 28, 2007</h3>
						<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum&#8230;</a></p>
					</li>
					<li>
						<h3>February 25, 2007</h3>
						<p><a href="#">Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam nequea&#8230;</a></p>
					</li>
					<li>
						<h3>February 20, 2007</h3>
						<p><a href="#">Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros&#8230;</a></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="main">
		<div id="welcome" class="post">
			<p><img src="images/pets2.jpg" alt="" width="500" height="300" /></p>
			<h2 class="title">Welcome to Forever Home!</h2>
			<h3 class="date"><span class="month">Mar.</span> <span class="day">8</span><span class="year">, 2007</span></h3>
			<div class="meta">
				<p>Posted by Jane Anderson under <a href="#">Uncategorized</a>, <a href="#">Daily Journal</a><br />
					<a href="#">Trackback URI</a> | <a href="#">No Comments</a> | <a href="#">Permalink</a></p>
			</div>
			<div class="story">
				<p><strong>Bird Watch</strong> is a free template from <a href="http://www.freecsstemplates.org">FCT</a> released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5 License</a>. The photo is from <a href="http://www.pdphoto.org/">PDPhoto.org</a>. You're free to use it for both commercial or personal use. I only ask that you link back to my site in some way. <em>Enjoy :)</em></p>
			</div>
		</div>
		<div id="example" class="post">
			<h2 class="title">Examples of Common Tags</h2>
			<h3 class="date"><span class="month">Feb.</span> <span class="day">24</span><span class="year">, 2007</span></h3>
			<div class="meta">
				<p>Posted by Jane Anderson under <a href="#">Samples</a><br />
					<a href="#">Trackback URI</a> | <a href="#">No Comments</a> | <a href="#">Permalink</a></p>
			</div>
			<div class="story">
				<p>This is an example of a paragraph followed by a blockquote. In posuere  eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula.  Pellentesque viverra vulputate enim. Aliquam erat volutpat lorem ipsum  dolorem.</p>
				<blockquote>
					<p>&ldquo;Pellentesque tristique ante ut  risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum  id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec  placerat odio.&rdquo;</p>
				</blockquote>
				<h3>Heading Level Three</h3>
				<p>This is another example of a paragraph followed by an unordered list. In posuere  eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula.  Pellentesque viverra vulputate enim. Aliquam erat volutpat lorem ipsum  dolorem.</p>
				<p>An ordered list example:</p>
				<ol>
					<li>List item number one</li>
					<li>List item number two</li>
					<li>List item number thre</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2007 Bird Watch. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
