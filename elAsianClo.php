<?php
include 'db_connection.php';

if(!isset($_SESSION['uname'])){
		header('Location: elAsianCloBestSeller.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>El Asian Clo.</title>
<link rel = "stylesheet" type = "text/css" href = "elAsianClo.css"/>
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
		<div class="list"><h2>ITEMS</h2></div>
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
		<a href="http://localhost/elAsianCloMemberPage.php"><h4>Sign Up</h4></a>
		<a href="http://localhost/elAsianCloMemberPage.php"><h4>Profile</h4></a>
	</div>
	<div class="itemContainer">
	<div class="KidlatTee">
		<img src="http://localhost/pictures/Shirts/kidlat%20colored.jpg" alt="Kidlat Tee" style="width: 100%;">
		<p>Kidlat Tee <span class="price"> Php.750</span><br /></p>
	</div>
	<div class="mataTee">
		<img src="http://localhost/pictures/Shirts/muka1.jpg" alt="Mata Tee" style="width: 100%;">
		<p>Mata Tee <span class="price"> Php.750</span><br /></p>
	</div>	
	</div>
</body>
</html>