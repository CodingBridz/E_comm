<!DOCTYPE html>
<html>
<head>
	<title>E Commerce Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div id="top"> <!-- Top Bar Start -->
		<div class="container"> <!-- Container Start -->

			<div class="col-md-6 offer">

				<a href="#" class="btn btn-success btn-sm">
					Welcome Guest
				</a>
				<a href="#">
					Shopping Cart Total Price: INR 100, Total Items 2
				</a>
			</div>
			<div class="col-md-6 offer">
				<ul class="menu">
					<li>
						<a href="customer_registration.php">Register</a>
					</li>
					<li>
						<a href="customer/my_account.php">My Account</a>
					</li>
					<li>
						<a href="cart.php"> Go to Cart</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
				</ul>
			</div>
			
		</div> <!-- Container Start -->
		
	</div> <!-- Top Bar End -->
	<div class="navbar navbar-default" id="navbar"> <!-- navbar start -->

		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand home">
					<img src="images/logo.png" alt="teehosting" class="hidden-xs" width="140px" height="45px;">
					<img src="images/logo-small.png" alt="teehosting" class="visible-xs" width="80px" height="50px;">
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only"> Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"> Toggle Navigation</span>
					<i class="fa fa-search"></i>
				</button>
			</div> <!--navbar header end -->
			<div class="navbar-collapse" id="navigation"><!-- navbar collapse start -->

				<div class="padding-nav">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="active">
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="customer/my_account.php">My Account</a>
						</li>
						<li>
							<a href="cart.php">Shopping Cart</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="services.php">Services</a>
						</li>
						<li>
							<a href="contactus.php">Contact Us</a>
						</li>
					</ul>	
				</div> <!--padding nav close-->
				

				<div class="navbar-collapse collapse right">
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only"> Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>	
				</div>
				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span>4 Items in Cart</span>	
				</a>
				<div class="collapse clearfix" id="search">
					<form class="navbar-form" method="get" action="result.php">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
							<span class="input-group-btn">
							<button type="submit" value="serach" name="search" class="btn btn-primary">
									<i class="fa fa-search"></i>
							</button>
							</span>
						</div>
					</form>
				</div>
				
			</div><!-- navbar collapse End -->
		</div>	
	</div><!-- navbar End -->

	<div id="content"><!--conatiner Start-->
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>Details</li>
				</ul>
			</div>
			<div class="col-md-3">
				<?php 
				include("includes/sidebar.php");
				?>
			</div>
			<div class="col-md-9"><!---col md 9 -->
				<div class="row" id="productmain">
					<div class="col-sm-6">
						<div id="mainimage">
							<div id="mycarousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="myCarousel" data-slide-to="1"></li>
									<li data-target="myCarousel" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner"><!-- carousel inner start-->
									<div class="item active">
										<center>
										<img src="admin_area/product_images/product1.jpg" class="img-responsive">
										</center>
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
								</div><!-- carousel inner End-->
								<a href="#myCarousel" class="left carousel-control" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Prev</span>
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
						<h1 class="text-center">Men's Printed Fashion Jackets Korean Style</h1>
							<form action="details.php" method="post" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-5 control-label">
										Product Quantity
									</label>
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
									<label class="col-md-5 control-label">
										Product Size
									</label>
									<div class="col-md-7">
										<select name="product_size" class="form-control">
											<option>Select a Size</option>
											<option>Small</option>
											<option>Medium</option>
											<option>Large</option>
											<option>Extra Large</option>
										</select>
									</div>
								</div>
								<p class="price">INR 200</p>
								<p class="text-center buttons">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-shopping-cart"></i> Add To Cart
									</button>
								</p>
							</form>
						</div>
						<div class="col-xs-4">
							<a href="#" class="thumb">
								<img src="admin_area/product_images/product1.jpg" class="img-responsive">
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
				</div><!--row End -->
				<div class="box" id="details">
					<h4>Product Details</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
					<h4>Size</h4>
					<ul>
						<li>Small</li>
						<li>Medium</li>
						<li>Large</li>
						<li>Extra Large</li>
					</ul>
				</div>
				<div id="row same-height-row">
					<div class="col-md-3 col-sm-6">
						<div class="box same-height headline">
							<h3 class="text-center">You Also Like These Products</h3>
						</div>
					</div>
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/product4.jpg" class="img-responsive">
							</a>
							<div class="text">
									<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
									<p class="price"> INR 299</p>
							</div>
						</div>
					</div>
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/product5.jpg" class="img-responsive">
							</a>
							<div class="text">
									<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
									<p class="price"> INR 299</p>
							</div>
						</div>
					</div>
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/product6.jpg" class="img-responsive">
							</a>
							<div class="text">
									<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
									<p class="price"> INR 299</p>
							</div>
						</div>
					</div>
				</div>
			</div><!---col md 9 End-->

		</div>
	</div><!--conatiner End-->

	<?php 
	include("includes/footer.php");
	?>
	<!---footer end-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</body>
</html>