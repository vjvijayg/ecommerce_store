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
						<li><a href="../customer_register.php" >Register</a></li>
						<li><a href="my_account.php">My Account</a></li>
						<li><a href="../cart.php">Go to Cart</a></li>
						<li><a href="../checkout.php">Login</a></li>
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
							<li><a href="../index.php">Home</a></li>
							<li><a href="../shop.php">Shop</a></li>
							<li class="active"><a href="my_account.php">My Account</a></li>
							<li><a href="../cart.php">Shopping Cart</a></li>
							<li><a href="../contact.php">Contact Us</a></li>
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
						<li>My Account</li>
					</ul>
				</div>
				<div class="col-md-3">
					<?php include("includes/sidebar.php"); ?>
				</div>
				<div class="col-md-9">
					<div class="box">
						<h1 align="center">Please Cofirm Your Payment</h1>
						<form action="confirm.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>Invoice No:</label>
								<input type="text" class="form-control" name="invoice_no" required>
							</div>
							<div class="form-group">
								<label>Amount Name:</label>
								<input type="text" class="form-control" name="amount_sent" required>
							</div>
							<div class="form-group">
								<label>Select Payment Mode:</label>
								<select name="payment_mode" class="form-control">
									<option>Select Payment Mode</option>
									<option>Paypal</option>
									<option>Bank Transfer</option>
									<option>Sofort</option>
									<option>Credit Card</option>
								</select>
							</div>
							<div class="form-group">
								<label>Transaction/Reference ID:</label>
								<input type="text" class="form-control" name="ref_no" required>
							</div>
							<div class="form-group">
								<label>Paypal Transactoin ID:</label>
								<input type="text" class="form-control" name="paypal_id" required>
							</div>
							<div class="form-group">
								<label>Payment Date:</label>
								<input type="text" class="form-control" name="date" required>
							</div>
							<div class="text-center">
								<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg"><i class="fa fa-user-md"></i> Cofirm Payment </button>
							</div>
						</form>
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