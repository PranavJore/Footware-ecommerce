<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <?php
	include("head.php");
	include("navbar.php");
	?>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

		<?php
		include("breadcrumbs.php");
		?>

		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center active">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 offset-sm-1 text-center">
						<p class="icon-addcart"><span><i class="icon-check"></i></span></p>
						<h2 class="mb-4">Thank you for purchasing, Your order is complete</h2>
						<p>
							<a href="index.html"class="btn btn-primary btn-outline-primary">Home</a>
							<a href="shop.html"class="btn btn-primary btn-outline-primary"><i class="icon-shopping-cart"></i> Continue Shopping</a>
						</p>
					</div>
				</div>
			</div>
		</div>

<?php
		include("footer.php");
		include("footer_links.php");
	?>
	</body>
</html>
