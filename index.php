<?php
include("includes/db.php");
?>
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
						<a href="checkout.php">My Account</a>
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
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
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
	<div class="container" id="slider"> <!--slider start-->
		<div class="col-md-12">
			<div class="carousel slide" id="myCarousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="myCarousel" data-slide-to="1"></li>
					<li data-target="myCarousel" data-slide-to="2"></li>
					<li data-target="myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner"><!-- carousel inner start-->
					<?php
					$get_slider = "select * from slider LIMIT 0,1";
					$run_slider = mysqli_query($con,$get_slider);
					while($row=mysqli_fetch_array($run_slider)) {
						$slider_name=$row['slider_name'];
						$slider_image=$row['slider_image'];
						echo " <div class='item active'>
							<img src='admin_area/slider_images/$slider_image'>
						</div>
						";
					}
					?>
					<?php
					$get_slider = "select * from slider LIMIT 1,3";
					$run_slider = mysqli_query($con,$get_slider);
					while($row=mysqli_fetch_array($run_slider)) {
						$slider_name=$row['slider_name'];
						$slider_image=$row['slider_image'];
						echo " <div class='item'>
							<img src='admin_area/slider_images/$slider_image'>
						</div>
						";
					}
					?>
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
	</div><!--slider End-->
	<div id="advantage"><!--advantage start-->
		<div class="container">
			<div class="same-height-row">
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">BEST PRICES</a></h3>
						<p>You can check on all other sites about the prices and then compare with us.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">100% SATISFACTION GAURANTEED FROM US</a></h3>
						<p>Free return on everything for 3 months</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">WE LOVE OUR COUSTMERS</a></h3>
						<p>We are known to provide best possible services.</p>
					</div>
				</div>
			</div>
		</div>
	</div><!--advantage End-->
	<div id="hotbox">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>Latest this Week</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="content" class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product1.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product4.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product2.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product3.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product7.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product5.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product6.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
			<div class="col-sm-4 col-sm-6 single"><!--product start-->
				<div class="product">
					<a href="details.php">
						<img src="admin_area/product_images/product8.jpg" class="img-responsive">
					</a>
					<div class="text">
						<h3><a href="details.php">Men's Printed Fashion Jackets Korean Style</a></h3>
						<p class="price"> INR 299</p>
						<p class="buttons">
							<a href="details.php" class="btn btn-default">View Details</a>
							<a href="cart.php" class="btn btn-primary">
								<i class="fa fa-shopping-cart"></i>
								Add to Cart
							</a>
						</p>
					</div>
				</div>
			</div><!--product end-->
		</div>
	</div>
	<!---footer start-->
	<?php 
	include("includes/footer.php");
	?>
	<!---footer end-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>