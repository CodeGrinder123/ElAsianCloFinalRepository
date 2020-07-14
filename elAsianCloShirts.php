<?php
/*
Honor Code:

This is my own work and I have not received any unauthorized help in completing this. 
I have not copied from my classmate, friend, nor any unauthorized resource. 
I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
If proven guilty, I won't be credited any points for this endeavor.
*/
session_start();
require_once("elAsianCloShoppingCartDB.php");
$db_handle = new DBcontroller();
	if(isset($_POST['login'])){
		header("Location: elAsianClo.php");
	}
?>

<!DOCTYPE html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Best Seller</title>
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
		<input class="searchItem" type="Search" placeholder="Items">
		<a href="#"><img src="http://localhost/pictures/searchIcon.png" alt="Search" style="width: 4%;">
		</a>
	</form>
	</div>
	<div class="shoppingCart">
		<a href="elAsianCloShoppingCart.php"><img src="http://localhost/pictures/shoppingBag.png" alt="Shopping Bag" style="width:12%;">
		</a>
	</div>
	</div>
	<div class="Membership">
		<a href="http://localhost/elAsianCloMemberPage.php"><h4>Profile</h4></a>
	</div>
<div class="itemContainer">
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="elAsianCloShoppingCart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image">
				<img src="<?php echo $product_array[$key]["image"]; ?>">
			</div>
		<div class="product-tile-footer">
			<div class="product-title">
				<?php echo $product_array[$key]["name"]; ?>
			</div>
			<div class="product-price">
				<?php echo "Php. ".$product_array[$key]["price"]; ?>
			</div>
			<div class="cart-action">
				<input type="text" class="product-quantity" name="quantity" value="1" size="2" />
				<input type="submit" value="Add to Cart" class="btnAddAction" />
				
			</div>
		</div>
			</form>
		</div>
		
	<?php
		}
	}
	?>
</div>

</body>
</html>