<?php
	include('connect.php');
	$CONN = DBConnection();
	$products = $CONN->query("SELECT * FROM product");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Group 14 - Store Front </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

	<header id="header" class="skel-layers-fixed">
				<h1><a href="#">G14</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="discount.php">Discount</a></li>
						<li><a href="checkout.php" class="button special">Check Out</a></li>
					</ul>
				</nav>
			</header>
			

			<section id="banner">
				<div class="inner">
					<h2>Welcome to to the Store Front</h2>
					<p>Developed by group 14 </p>
				</div>
			</section>

			
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2>Product List</h2>
				</header>
				<div class="container">
					<div class="row">
						<?php
						foreach($products as $p)
						{
							echo '<div class="4u"><section class="special box">';
							echo '<h3>' . $p["name"] . '</h3>';
							echo '<a href="checkout.php?id='.$p["id"].'" class="button alt">Add to Cart</a></section></div>';
						}
						
						
						?>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<footer id="footer">
		</footer>

	</body>			
</html>

        
