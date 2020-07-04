<?php
include 'db_connection.php';

if(isset($_POST['logout'])){
	session_destroy();
	header('Location: elAsianCloLogin.php');
	
}
?>
<!DOCTYPE html>

<html>
<head>
<meta charset = "UTF-8">
<title>El Asian Clo.</title>
<link rel = "stylesheet" type = "text/css" href = "elAsianCloMemberPage.css"/>
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
		<div class="list"><h2>Welcome to your Profile</h2>
		<h4>Fill up the form below if wish to tweak profile.</h4>
		<h5>Only Username and Password can be changed.</h5>
		</div>
		<div class="accountInformation">
	<form method="post" action="http://localhost/elAsianCloUpdateProfile.php">
	<br>
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
			<input class="beAMember" type="Submit" value="Update" name="update"> 
			<input class="deleteButton" type="submit" value="Delete" name="Delete" href="http://localhost/elAsianCloUpdateProfile.php">	
	</form>
	<br>
	</div>
	<div class="searchIcon">
	<form method="POST" action="elAsianCloSearch.php">
		<input name="look" type="Search" placeholder="Items">
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
		<a href="http://localhost/elAsianCloMemberPage.php"><h4>Profile</h4></a>
	</div>
	<div class="logoutButton">
		<form method='POST' action="">
			<input class="logoutButton" type="submit" value="Logout" name="logout">
		</form>
	</div>
	</form>
</body>
</html>