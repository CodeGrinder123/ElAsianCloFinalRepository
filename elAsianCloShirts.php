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
		header("Location: elAsianCloShirts.php");
	}
?>
<!DOCTYPE html>
<head>
<meta charset = "UTF-8">
<title>Shirts</title>
<link rel = "stylesheet" type = "text/css" href = "elAsianCloBestSeller.css"/>
</head>>
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
		<div class="list"><h2>SHIRTS</h2></div>
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
		<a href="http://localhost/elAsianCloMemberPage.php"><h4>Profile</h4></a>
	</div>
	<div class="itemContainer">
	<div class="invertedEyeTee">
		<img src="http://localhost/pictures/Shirts/mata.jpg" alt="Inverted Eye Tee" style="width: 100%;">
		<p>Inverted Eye Tee <span class="price"> Php.800.00</span><br /></p>
	</div>
	<div class="indianTee">
		<img src="http://localhost/pictures/Shirts/indiancolored.jpg" alt="Indian Tee" style="width: 100%;">
		<p>Indian Tee <span class="price"> Php.800.00</span><br /></p>
	</div>
	</div>
	<br>
	<div class="itemContainer">
	<div class="KidlatTee">
		<img src="http://localhost/pictures/Shirts/kidlat%20colored.jpg" alt="Kidlat Tee" style="width: 100%;">
		<p>Kidlat Tee <span class="price"> Php.750.00</span><br /></p>
	</div>
	<div class="mataTee">
		<img src="http://localhost/pictures/Shirts/muka1.jpg" alt="Mata Tee" style="width: 100%;">
		<p>Mata Tee <span class="price"> Php.750.00</span><br /></p>
	</div>	
	</div>
</body>
</html>