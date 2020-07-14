<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/
include 'db_connection.php';

	if(isset($_POST['login'])){
		header("Location: elAsianCloAboutUs.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>About Us</title>
<link rel = "stylesheet" type = "text/css" href = "elAsianCloAboutUs.css"/>
</head>
<body>
	<div class="headerContainer">
		<img src="http://localhost/pictures/bgCroped.jpg" alt="El Asian Clo." style="width: 1354px;">
		<div class="brandName"><h1>El Asian Clo.</h1></div>
		<div class="brandMotto"><h3>"Have Power & Strength In Fashion"</h3></div>
		<ul>
			<li><a href="http://localhost/elAsianClo.php">Shop</a></li>
			<li><a href="http://localhost/elAsianCloNewArrival.php">New Arrival</a></li>
			<li><a href="http://localhost/elAsianCloBestSeller.php">Best Sellers</a></li>
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
		<a href="http://localhost/elAsianCloShoppingCart.php"><img src="http://localhost/pictures/shoppingBag.png" alt="Shopping Bag" style="width:12%;">
		</a>
	</div>
	</div>
	<div class="Membership">
		<a href="http://localhost/elAsianCloMemberPage.php"><h4>Profile</h4></a>
	</div>
	<div class="AboutUs">
		<h2><b>About El Asian Clo.</b></h2>
		<br>
		<article>
		<p><b>El Asian Clo.</b> is a local clothing brand in the Philippines. Our products are inspired through the culture
			that had lapsed over the years and bringing the artistic, cultural styles and designs back to life is one of our company goals in order
			to promote art and culture that are widely found in Asian Countries. Our main goal is let asian culture be seen and 
			appreciated by other countries, as well as the world of fashion and lifestyles. The brand manages to give customers great quality of materials, comfort and style.</p><br>
		</article>
	<div class="founders">
		<br><h2><b>FOUNDERS</b></h2>
		<div class="CEO">
			<br><h3><b>Joseph Louie Solcoretes</b></h3>
			<h4><b>CHIEF EXECUTIVE OFFICER</b></h4>
		</div>
		<div class="VPProduction">
			<br><h3><b>Christian James Morisca</b></h3>
			<h4><b>Vice President of Production</b></h3>
		</div>
		<div class="ProductionOfficers">
			<br><h3><b>Elyza Mae Sabido & Nicole Tugano</b></h3>
			<h4><b>Production Officers</b></h4>
		</div>
		<div class="VPMarketing">
			<br><h3><b>Edmar San Juan</b></h3>
			<h4><b>Vice President of Marketing</b></h3>
		</div>
		<div class="Web Developer">
			<br><h3><b>John Justin Berdin</b></h3>
			<h4><b>Web Developer</b></h3>
		</div>
	</div>
	<div class="ARR">
	<br><h2>All Rights Reserved 2020</h2>
	</div>
</body>
</html>