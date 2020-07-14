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
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "elAsianCloShoppingCart.css"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title> </title>
</head>
<body style="background-color: black;">
	<div class="headerContainer">
		<img src="http://localhost/pictures/bgCroped.jpg" alt="El Asian Clo." style="width: 1354px;">
		<div class="brandName"><h1>El Asian Clo.</h1></div>
        <div class="brandMotto"><h3>"Have Power & Strength In Fashion"</h3></div>
        <ul> </ul>
	</div>
	<div class="Membership">
		<a href="http://localhost/elAsianCloMemberPage.php"><h4>Profile</h4></a>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
                            <form method="POST" action="$_SERVER['PHP_SELF']">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
							<a href="http://localhost/elAsianCloBestSeller.php" class="homeButton">
								<button type="button" name="continueShopping" class="btn btn-primary btn-sm btn-block" >
                                    <span class="glyphicon glyphicon-share-alt"></span> Continue shopping 
								</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
				<?php 
					if(isset($_SESSION["cart_item"])){
						$total_quantity = 0;
						$total_price = 0;
				?>
				<?php
					foreach ($_SESSION["cart_item"] as $item){
						$item_price = $item["quantity"]*$item["price"];
						?>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="<?php $item["image"]; ?>">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $item["name"]; ?></strong></h4><h4><small><?php echo $item["code"]; ?></small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong><?php echo "Php. " .number_format($item_price, 2); ?><span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" name="quantity" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
								<a href="elAsianCloShoppingCart.php?action=remove&code=<?php echo $item["code"]; ?>" class="buttonRemoveAction">
									<span class="glyphicon glyphicon-trash"> </span></a>
								</button>
							</div>
						</div>
					</div>
					<?php 
						$total_quantity += $item["quantity"];
						$total_price += ($item["price"]*$item["quantity"]);
					}
					?>
					<?php } else { ?>
						<div class="no-records">Your Cart is Empty</div>
					<?php } ?>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									<a href="http://localhost/elAsianCloShoppingCart.php">
									Update cart </a>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>
							<?php 
							if(isset($_SESSION["cart_item"])){
								echo "Php. " .number_format($total_price, 2); 
							}
							?></strong></h4>
						</div>
						<div class="col-xs-3">
						<a href="http://localhost/elAsianCloBestSeller.php" class="homeButton">
							<button type="button" class="btn btn-success btn-block">
								Checkout 
							</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</nav>
</body>
<html>