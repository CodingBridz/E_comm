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
						<li>
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="customer/my_account.php">My Account</a>
						</li>
						<li class="active">
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
					<li>Cart</li>
				</ul>
			</div>
			<div class="col-md-9" id="cart">
				<div class="box">
					<form action="cart.php" method="post" enctype="multipart-form-data">
						<h1>Shopping Cart</h1>
						<?php
						$ip_add=getUserIP();
						$select_cart="select * from cart where ip_add ='$ip_add'";
						$run_cart=mysqli_query($con,$select_cart);
						$count=mysqli_num_rows($run_cart);
						
						?>
						<p class="text-muted">Currently you have <?php echo $count ?> Items in Your Cart</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Product</th>
										<th>Quantity</th>
										<th>Unit Price</th>
										<th>Size</th>
										<th colspan="1">Delete</th>
										<th colspan="1">Sub Total</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$total=0;
									while ($record=mysqli_fetch_array($run_cart)) {
									$pro_id=$record['p_id'];
									$pro_size=$record['size'];
									$pro_qty=$record['qty'];
									$get_product="select * from products where product_id='$pro_id'";
									$run_product=mysqli_query($con,$get_product);
									while ($row_product=mysqli_fetch_array($run_product)) {
										$pro_title=$row_product['product_title'];
										$pro_price=$row_product['product_price'];
										$pro_img1=$row_product['product_img1'];
										$sub_total=$row_product['product_price']*$pro_qty;
										$total += $sub_total;
						
									?>
									<tr>
										<td>
											<img src="admin_area/product_images/<?php echo $pro_img1; ?>">
										</td>
										<td>
											<?php echo $pro_title; ?>
										</td>
										<td><?php echo $pro_qty; ?></td>
										<td>INR <?php echo $pro_price; ?></td>
										<td><?php echo $pro_size; ?></td>
										<td>
											<input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
										</td>
										<td>
											INR <?php echo $sub_total; ?>
										</td>
									</tr>
								<?php }} ?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">Total Price:</th>
										<th colspan="2">INR <?php echo $total ?></th>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="box-footer">
							<div class="pull-left">
								<a href="index.php" class="btn btn-primary">
									<i class="fa fa-chevron-left"></i> Continue Shopping
								</a>
							</div>
							<div class="pull-right">
								<button class="btn btn-default" type="submit" name="update" value="Update Cart">
									<i class="fa fa-refresh"> Update Cart</i>
								</button>
								<a href="checkout.php" class="btn btn-primary">
									Proceed to Checkout <i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</form>
				</div>
				<?php
				function update_cart(){
					global $con;
					if (isset($_POST['update'])) {
						foreach ($_POST['remove'] as $remove_id) {
							$delete_product="delete from cart where p_id ='$remove_id'";
							$run_del=mysqli_query($con,$delete_product);
							if($run_del){
								echo"<script>window.open('cart.php','_self')</script>";
							}
						}
					}

				}

				echo @$up_cart=update_cart();
				?>
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
			</div>
			<div class="col-md-3">
				<div class="box" id="order-summary">
					<h3>Order Summary</h3>
				<p class="text-muted">
					Shipping and Additional Costs are calculated based on the values you have entered
				</p>
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<tr>
								<td>Order Subtotal</td>
								<th>INR <?php echo $total ?></th>
							</tr>
							<tr>
								<td>Shipping and Handeling</td>
								<td>INR 0</td>
							</tr>
							<tr>
								<td>Tax</td>
								<td>INR 0</td>
							</tr>
							<tr class="total">
								<td>Total</td>
								<th>INR <?php echo $total ?></th>
							</tr>
						</tbody>
					</table>
				</div>
				</div>
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