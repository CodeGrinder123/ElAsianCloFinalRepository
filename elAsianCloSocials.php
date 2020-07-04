<?php
include 'db_connection.php';
	if(isset($_POST['login'])){
		header("Location: elAsianCloSocials.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
<meta charset = "UTF-8">
<title>Socials</title>
<link rel = "stylesheet" type = "text/css" href = "elAsianCloSocials.css"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<div class="headerContainer">
		<img src="http://localhost/pictures/bgCroped.jpg" alt="El Asian Clo." style="width: 1354px;">
		<div class="brandName"><h1>El Asian Clo.</h1></div>
		<div class="brandMotto"><h3>"Have Power & Strength In Fashion"</h3></div>
		<ul>
			<li><a href="http://localhost/elAsianClo.php">Shop</a></li>
			<li><a href="http://localhost/elAsianCloNewArrival.php">New Arrival</a></li>
			<li><a href="http://localhost/elAsianCloBestSeller.php">Best Seller</a></li>
			<li><a href="http://localhost/elAsianCloSocials.php">Socials</a></li>
			<li><a href="http://localhost/elAsianCloAboutUs.php">About</a></li>
		</ul>
	<div class="searchIcon">
	<form method="POST" action="elAsianCloSearch.php">
		<input type="Search" placeholder="Items">
		<a href="#"><img src="http://localhost/pictures/searchIcon.png" alt="Search" style="width: 4%;">
		</a>
	</form>
	</div>
	<div class="shoppingCart">
		<a href="#"><img src="http://localhost/pictures/shoppingBag.png" alt="Shopping Bag" style="width:12%;">
		</a>
	</div>
	</div>
	<div class="Membership">
		<a href="fhttp://localhost/elAsianCloSignUp.php"><h4>Sign Up</h4></a>
		<a href="http://localhost/elAsianCloMemberPage.php#"><h4>Profile</h4></a>
	</div>
	
	<h3>Socials</h3>
	<div class="imgContainer">
		<a href="https://www.facebook.com/ElAsianClo"><img class="facebookLogo" src="http://localhost/pictures/fbLogo.png" alt="Facebook" style="width: 3%;"></a>
		<a href="http://www.twitter.com/elasianclo"><img class="twitterLogo" src="http://localhost/pictures/twitterLogo.png" alt="Twitter" style="width: 3%;"></a>
		<a href="http://www.instagram.com/elasianclo"><img class="igLogo" src="http://localhost/pictures/IGLogo.png" alt="Instagram" style="width: 3%;"></a>
	</div>	
	<br><h2>All Rights Reserved 2020</h2>
	
	</body>
</html>