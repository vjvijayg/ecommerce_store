<!DOCTYPE html>
<html>
	<head>
		<title>E Commerce Store</title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		
		<div id="top">
			<div class="container">
				<div class="col-md-6 offer">
					<a href="#" class="btn btn-success btn-sm">
						Welcome :Guest
					</a>
					<a href="#">Shopping Cart Total Price: $100, Total Items 2</a>
				</div>
				<div class="col-md-6">
					<ul class="menu">
						<li><a href="customer_register.php" >Register</a></li>
						<li><a href="checkout.php">My Account</a></li>
						<li><a href="cart.php">Go to Cart</a></li>
						<li><a href="checkout.php">Login</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="navbar navbar-default" id="navbar">
			<div class="container">
				<div class="navbar-haeder">
					<a class="navbar-brand home" href="index.php">
						<img src="images/logo.png" alt="It's our logo" class="hidden-xs">
						<img src="images/logo.png" alt="It's our logo" class="visible-xs">
					</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-align-justify"></i>
					</button>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navigation">
					<div class="padding-nav">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="shop.php">Shop</a></li>
							<li><a href="checkout.php">My Account</a></li>
							<li><a href="cart.php">Shopping Cart</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					<a class="btn btn-primary navbar-btn right" href="cart.php">
						<i class="fa fa-shopiing-cart"></i>
						<span>4 items in cart</span>
					</a>
					<div class="navbar-collapse collapse right">
						<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
							<span class="sr-only">Toggle Search</span>
							<i class="fa fa-search"></i>
						</button>
					</div>
					<div class="collapse clearfix" id="search">
						<form class="navbar-form" method="get" action="results.php">
							<div class="input-group">
								<input type="form-comtrol" type="text" placeholder="Search" name="user_query" required>
								<span class="input-group-btn">
									<button type="submit" value="Search" name="search" class="btn btn-primary">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="content">
			<div class="container">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>Shop</li>
					</ul>
				</div>
				<div class="col-md-3">
					<?php include("includes/sidebar.php"); ?>
				</div>
				<div class="col-md-9">
					<div class="box">
						<h1>Shop</h1>
						<p>It is a long established fact that areader will distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using</p>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 center-responsive">
							<div class="product">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
									<P class="price">$50</P>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopiing-cart"></i>Add to Cart
										</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 center-responsive">
							<div class="product">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
									<P class="price">$50</P>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopiing-cart"></i>Add to Cart
										</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 center-responsive">
							<div class="product">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
									<P class="price">$50</P>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopiing-cart"></i>Add to Cart
										</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 center-responsive">
							<div class="product">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
									<P class="price">$50</P>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopiing-cart"></i>Add to Cart
										</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 center-responsive">
							<div class="product">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
									<P class="price">$50</P>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopiing-cart"></i>Add to Cart
										</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 center-responsive">
							<div class="product">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php">MARVEL Black Kids POLO T-Shirt</a></h3>
									<P class="price">$50</P>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopiing-cart"></i>Add to Cart
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<center>
						<ul class="pagination">
							<li><a href="shop.php">First Page</a></li>
							<li><a href="shop.php">1</a></li>
							<li><a href="shop.php">2</a></li>
							<li><a href="shop.php">3</a></li>
							<li><a href="shop.php">4</a></li>
							<li><a href="shop.php">5</a></li>
							<li><a href="shop.php">Last Page</a></li>
						</ul>
					</center>
				</div>
			</div>
		</div>

		<?php  
			include("includes/footer.php");
		?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js" ></script>

	</body>
</html>