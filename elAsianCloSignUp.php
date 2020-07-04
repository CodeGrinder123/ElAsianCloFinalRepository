<!DOCTYPE html>

<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Sign Up</title>
<link rel = "stylesheet" type = "text/css" href = "elAsianCloSignUp.css"/>
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
	
	<h3 class="headerSignUp">Sign Up to El Asian Clo.</h3>
	<div class="accountInformation">
	<form method="post" action="http://localhost/elAsianCloDB.php">
		<label class="fname" for="fname">First Name: </label>
			<input class="fname" type="text" id="fname" name="fname" placeholder="First Name"><br>

		<label class="sname" for="sname">Surname: </label>
			<input class="sname" type="text" id="sname" name="sname" placeholder="Surname"><br>

		<label class="age" for="age">Age: </label>
			<input class="age" type="number" id="age" name="age" placeholder="Age"><br>

		<label class="username" for="user">Username: </label>
			<input class="username" type="text" id="username" name="username" placeholder="Username"><br>

		<label class="pwd" for="pwd">Password: </label>
			<input class="pwd" type="password" id="pwd" name="password" placeholder="Password"><br>
		<input class="beAMember" name="submit" type="Submit">
	</form>
	<br> 
	</div>
	<br>
	<footer class="ARRFooter"><br><h2>All Rights Reserved &copy; 2020</h2></footer>
	</body>
</html>