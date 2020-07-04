<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/
	if(isset($_POST['login'])){
		header("Location: elAsianClo.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>El Asian Clo. login</title>
<link rel = "stylesheet" type = "text/css" href = "elAsianCloLoginFAILED.css"/>
</head>
<body>
	<div class="headerContainer">
		<img src="http://localhost/pictures/bgCroped.jpg" alt="El Asian Clo." style="width: 1354px;">
		<div class="brandName"><h1>El Asian Clo.</h1></div>
		<div class="brandMotto"><h3>"Have Power & Strength In Fashion"</h3></div>
		<ul>
			<li><a href="#">Shop</a></li>
			<li><a href="#">New Arrival</a></li>
			<li><a href="#">Best Seller</a></li>
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
		<a href="http://localhost/elAsianCloSignUp.php"><h4>Sign Up</h4></a>
		<a href="http://localhost/elAsianCloLogin.php#"><h4>Login</h4></a>
	</div>
	
	<h3 class="headerSignUp">Login</h3>
	<div class="accountInformation">
	<form method="POST" action="">
		<label class="username" for="user">Username: </label>
			<input class="username" type="text" id="username" name="username" placeholder="Username"><br>
			
		<label class="pwd" for="pwd">Password: </label>
			<input class="pwd" type="password" id="pwd" name="password" placeholder="Password"><br>
				<input class="logIn" type="Submit" value="Login" name="login" href= "http://localhost/elAsianCloMemberPage.php">
				<div class="incorrectInput"<h3>Wrong username or password</h3></div>
	</form>
	<br> 
	</div>
	<br>
	<footer class="ARRFooter"><br><h2>All Rights Reserved &copy; 2020</h2></footer>
	</body>
</html>