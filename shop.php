<?php
include("includes/db.php");
include("functions/functions.php");
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
					Shopping Cart Total Price: INR <?php totalPrice(); ?>, Total Items <?php item();?>
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
					<span><?php item();?> Items in Cart</span>	
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
					<li>Shop</li>
				</ul>
			</div>
			<div class="col-md-3">
				<?php 
				include("includes/sidebar.php");
				?>
			</div>
			<div class="col-md-9">
				<?php
					if(!isset($_GET['p_cat'])){
						if(!isset($_GET['cat_id'])){

							echo'
							<div class="box">
							<center>
							<h1>Shop</h1>
							<p>This theme is created by a IT student by Narinder Singh who is Persuing Masters in Lovely Professional University</p>
							</center>
							</div>';
						}
					}
				?>
				<div class="row">
					<?php

					if(!isset($_GET['p_cat'])){
						if(!isset($_GET['cat_id'])){

							$per_page=6;
							if(isset($_GET['page'])){
								$page=$_GET['page'];
							}else{
								$page=1;
							}

							$start_from=($page-1) * $per_page;
							$get_product="select * from products order by 1 DESC LIMIT $start_from,$per_page";
							$run_product=mysqli_query($db,$get_product);
							while ($row_product=mysqli_fetch_array($run_product)) {
								$pro_id=$row_product['product_id'];
								$pro_title=$row_product['product_title'];
								$pro_price=$row_product['product_price'];
								$pro_img1=$row_product['product_img1'];

								echo"

									<div class='col-md-4 col-sm-6 center responsive'>
									<div class='product'>
									<a href='details.php?pro_id=$pro_id'>
									<img src='admin_area/product_images/$pro_img1' class='img-responsive'
									</a>
									<div class='text'>
									<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
									<p class='price'> INR $pro_price</p>
									<p class='buttons'> <a href='details.php?pro_id=$pro_id' class='btn btn-default'>
									View Details
									</a>
									<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
										<i class='fa fa-shopping-cart'> Add To Cart</i>
									</a>
									</p>

									</div>
									</div>
									</div>

								";
						}
						


					?>
				</div>
				<center>
					<ul class="pagination">
						
					<?php

					$query="select * from products";
					$result=mysqli_query($con,$query);
					$total_record=mysqli_num_rows($result);
					$total_pages=ceil($total_record / $per_page);
						echo'
						<li><a href="shop.php?page=1">'."First Page".'</a></li>
						';
						for($i=1; $i<=$total_pages; $i++){
						echo'
						<li><a href="shop.php?page='.$i.'">'."$i".'</a></li>
						';
						};
						echo'
						<li><a href="shop.php?page=$total_pages">'."Last Page".'</a></li>
						';
					}
					}
					?>
					</ul>
				</center>
				
					<?php
					getPcatPro();
					getCatPro();
					?>
				
			</div>
		</div>
	</div><!--conatiner End-->

	<?php 
	include("includes/footer.php");
	?>
	<!---footer end-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</body>
</html>