
<!DOCTYPE html>
<?php require_once('Connections/MyConnection.php'); ?>
<?php session_start();
if(!isset($_SESSION['MM_Username']))
{   // not logged in
    header('Location: login.php');
exit();}
	?>
<?php
$email=$_SESSION['MM_Username'];
$id=$_REQUEST['id'];
mysql_select_db($database_MyConnection, $MyConnection);
$un=mysql_query("SELECT customer_name FROM customers where customer_email='$email'", $MyConnection) or die(mysql_error());
$username = mysql_fetch_assoc($un);
$query_products = "SELECT * FROM products where product_id='$id'";
$products = mysql_query($query_products, $MyConnection) or die(mysql_error());
$row_products = mysql_fetch_assoc($products);
$header=$row_products['cat_id'];
$query_product = "SELECT distinct cat_title FROM categories where cat_id='$header'";
$product = mysql_query($query_product, $MyConnection) or die(mysql_error());
$row_product = mysql_fetch_assoc($product);
$query_produc = "SELECT * FROM products where cat_id='$header'";
$produc = mysql_query($query_produc, $MyConnection) or die(mysql_error());
$row_produc = mysql_fetch_assoc($produc);
?>
<html>
<head>
<title>CLICK FOR MEAL</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<?php 
if(!isset($_SESSION['MM_Username']))
{
    // not logged in
    header('Location: login.php');
exit();}?>
</head>
<body>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="#">CLICK FOR MEAL<span>The Best Canteen</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Beverages<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Mocktails</b></a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Forest Fire</a></li>
												<li><a href="kitchen.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Vanilla Kiwi Ale</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruit Cup</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Tea and Coffee</b></a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Estate Tea</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>House Blend Tea</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Origin Coffee</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Espresso</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Other Beverages</b></a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Carbonated Water</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Tonic Water</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Energy Drink</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="kitchen.php"><img src="images/nav1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Puddings and Deserts<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>Puddings</b> </a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Rice Pudding</a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Almond Cake</a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Chocolate Brownie</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="care.php"> <i class="fa fa-angle-right" aria-hidden="true"></i><b>Deserts</b> </a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Rasmalie</a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Chocolate Mousse</a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sundae</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>Ice-Creams</b> </a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Bombay Ice-Cream</a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Vanilla</a></li>
												<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Butter Scotch</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="care.php"><img src="images/nav2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Comfort Mains<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Mac and Cheese</a></li>
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Glazed Pie</a></li>
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Roast Chicken Basket</a></li>
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Singapore Veg Laksa</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Rajma Masala</a></li>
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Chicken Lababdar</a></li>
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Penne all'Arrabbiata</a></li>
										
											</ul>
										
										</div>
                                        <div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Farfalle Salsiccia</a></li>
										        <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Risotto Gamberi</a></li>
                                                <li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Singapore Veg Laksa</a></li>
											</ul>
										
										</div>
                                        
										<div class="col-sm-3 w3l">
											<a href="hold.php"><img src="images/nav3.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Others<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
											<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Burger</b></a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Herb Burger</a></li>
												<li><a href="others.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Lamb Burger</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Schnitzel Burger</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Pizzas</b></a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Margherita</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Vegetariana</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Papperoni</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Chinese</b></a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Hakka Noodles</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Schezwan Noodles</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gravy Roll</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="kitchen.php"><img src="images/nav4.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
                            
							<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
							<li class=" "><a class=""><span>             </span></a></li>	
							<li class="active "><a class="hyper "><span>Hi <?php echo $username['customer_name'];?> </span></a></li>	
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 ><?php echo $row_product['cat_title']; ?></h3>
		<h4><a href="index.php">Home</a><label>/</label><?php echo $row_product['cat_title']; ?></h4>
		<div class="clearfix"> </div>
	</div>
</div>
		<div class="single">
			<div class="container">
						<div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
							
<div id="picture-frame">
			<img src="<?php echo $row_products["product_image"];?>" data-src="<?php echo $row_products["product_image"];?>" alt="" class="img-responsive"/>
		</div>
										<script src="js/jquery.zoomtoo.js"></script>
								<script>
			$(function() {
				$("#picture-frame").zoomToo({
					magnify: 1
				});
			});
		</script>
		
		
		
			</div>
			</div>
			<div class="col-md-7 single-top-left ">
								<div class="single-right">
				<h3><?php echo $row_products["product_title"];?></h3>
				
					
				 <div class="pr-single">
				  <p class="reduced ">&nbsp;Rs <?php echo $row_products["product_price"];?></p>
				</div>
				<div class="block block-w3">
					<div class="starbox small ghosting"> </div>
				</div>
				<p class="in-pa"> <?php echo $row_products["product_desc"];?> </p>
			   	
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
					<div class="add add-3">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="<?php echo $row_products['product_title']; ?>" data-summary="summary 1" data-price="<?php echo $row_products['product_price']; ?>" data-quantity="1" data-image="<?php echo $row_products["product_image"];?>">Add to Cart</button>
										</div>
				
				 
			   
			<div class="clearfix"> </div>
			</div>
		 

			</div>
		   <div class="clearfix"> </div>
	   </div>	
				 
				
	</div>
</div>
		<!---->
<div class="content-top offer-w3agile">
	<div class="container ">
			<div class="spec ">
				<h3>Related Products</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
						<?php while($row_produc = mysql_fetch_assoc($produc)){ ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="<?php echo "#";?><?php echo $row_produc["image_id"];?>" class="offer-img">
										<img src="<?php echo $row_produc["product_image"];?>" class="img-responsive" alt="">
									</a>
                                    
                                       <div class="mid-1">
										<div class="women">
                                    
                                    <h6><a class="employee_details" href="single.php?id=<?php echo $row_produc["product_id"];?>">
									<?php echo $row_produc["product_title"];?>
									</a></h6>
                                   
											
                                            							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">Rs <?php echo $row_produc["product_price"];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $row_produc["product_id"];?>" data-name="<?php echo $row_produc["product_title"];?>" data-summary="summary 24" data-price="<?php echo $row_produc["product_price"];?>" data-quantity="1" data-image="<?php echo $row_produc["product_image"];?>">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
                            
             <form action ="single.php" id="testform" method="post">
                                    <input type="hidden" name="product_desc" value="<?php echo $row_produc["product_desc"];?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row_produc["product_id"];?>" />
                                    </form>
             
                            
			<div class="modal fade" id="<?php echo $row_produc["image_id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo $row_produc["product_image"];?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3><?php echo $row_produc["product_title"];?></h3>
									<p class="in-para"><?php echo $row_produc["product_desc"];?></p>
									<div class="price_single">
									  <span class="reducedfrom ">Rs <?php echo $row_produc["product_price"];?></span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> <?php echo $row_produc["product_desc"];?></p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="<?php echo $row_produc["product_id"];?>" data-name="<?php echo $row_produc["product_title"];?>" data-summary="summary 24" data-price="<?php echo $row_produc["product_price"];?>" data-quantity="1" data-image="<?php echo $row_produc["product_image"];?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
							
							<?php }?>
		
						 
						 
						 
						 
						 
					</div>
				</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>We aim at providing glib and quick access to food items
			   across canteen alongwith a clear and transparent transaction.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="kitchen.php">Beverages</a></li>
				<li><a href="care.php">Pudding and Desert</a></li>
				<li><a href="hold.php">Comfort Mains</a></li>						 
				<li><a href="codes.php">Others</a></li> 
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.php">Shipping</a></li>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Faqs</a></li>
				<li><a href="contact.php">Contact</a></li>					 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="wishlist.php">Wishlist</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="#">CLICK FOR MEAL<span>The Best Canteen</span></a></h2>
				<p class="fo-para">Click For Meal Store is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet.</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>12K Vasant Vihar, India.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+9411178219, +9045989514</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>teamasva@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2016 CLICK FOR MEAL. All Rights Reserved | Design by  Team ASVA</a></p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name  \t price \t quantity \t image path";
		
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
		  console.log("yo yo pande", this.id,this.name,this.price);
	      $.post("cart.php", {pid:this.id,pname:this.name,pq:this.quantity,prodaprice:this.price,pi:this.image});	   
        });
       
		  function pageRedirect() {

       window.location.replace("http://localhost/canteen/wishlist.php");

       }      
       pageRedirect();
    //setTimeout("pageRedirect()", 0);
        console.log("checking out", products,checkoutString, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 1;
      }
    });

  });
  </script>


</body>
</html>