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
						<li><a href="cutomer_register.php" >Register</a></li>
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
								<input type="form-control" type="text" placeholder="Search" name="user_query" required>
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
					<div class="row" id="productMain">
						<div class="col-sm-6">
							<div id="mainImage">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-tartget="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner">
										<div class="item active">
											<center><img src="admin_area/product_images/product.jpg" class="img-responsive"></center>
										</div>
										<div class="item">
											<center>
												<img src="admin_area/product_images/product2.jpg" class="img-responsive">
											</center>
										</div>
										<div class="item">
											<center>
												<img src="admin_area/product_images/product3.jpg" class="img-responsive">
											</center>
										</div>
									</div>
									<a href="#myCarousel" class="left carousel-control" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a href="#myCarousel" class="right carousel-control" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="box">
								<h1 class="text-center"> MARVEL Black Kids POLO T-Shirt </h1>
								<form action="details.php" method="POST" class="form-horizontal">
									<div class="form-group">
										<label class="col-md-5 control-label">Product Quantity</label>
										<div class="col-md-7">
											<select name="product_qty" class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-5 control-label">Product size</label>
										<div class="col-md-7">
											<select name="product_size" class="form-control">
												<option>Select a Size</option>
												<option>Small</option>
												<option>Medium</option>
												<option>Large</option>
											</select>
										</div>
									</div>
									<p class="price"> $50 </p>
									<p class="text-center buttons">
										<button class="btn btn-primary" type="submit">
											<i class="fa fa-shopping-cart"> Add to Cart</i>
										</button>
									</p>
								</form>
							</div>
							<div class="row" id="thumbs">
								<div class="col-xs-4">
									<a href="#" class="thumb">
										<img src="admin_area/product_images/product.jpg" class="img-responsive">
									</a>
								</div>

								<div class="col-xs-4">
									<a href="#" class="thumb">
										<img src="admin_area/product_images/product2.jpg" class="img-responsive">
									</a>
								</div>

								<div class="col-xs-4">
									<a href="#" class="thumb">
										<img src="admin_area/product_images/product3.jpg" class="img-responsive">
									</a>
								</div>

							</div>
						</div>
					</div>

					<div class="box" id="details">
						<p>
							<h4>Product details</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam. Ut aliquet tristique nisl vitae volutpat. Nulla aliquet porttitor venenatis.</p>
							<h4> Size </h4>
							<ul>
								<li>Small</li>
								<li>Medium</li>
								<li>Large</li>
							</ul>
						</p>
						<hr>
					</div>

					<div id="row same-height-row">
						<div class="col-md-3 col-sm-6">
							<div class="box same-height headline">
								<h3 class="text-center"> You may also like these products </h3>
							</div>
						</div>
						<div class="center-responsive col-md-3 col-sm-6">
							<div class="product same-height">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php"> MARVEL Black Kids POLO T-Shirt </a></h3>
									<p class="price">$50</p>
								</div>
							</div>
						</div>

						<div class="center-responsive col-md-3 col-sm-6">
							<div class="product same-height">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php"> MARVEL Black Kids POLO T-Shirt </a></h3>
									<p class="price">$50</p>
								</div>
							</div>
						</div>

						<div class="center-responsive col-md-3 col-sm-6">
							<div class="product same-height">
								<a href="details.php">
									<img src="admin_area/product_images/product.jpg" class="img-responsive">
								</a>
								<div class="text">
									<h3><a href="details.php"> MARVEL Black Kids POLO T-Shirt </a></h3>
									<p class="price">$50</p>
								</div>
							</div>
						</div>
						
					</div>
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