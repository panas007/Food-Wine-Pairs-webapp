<?php
require_once 'ipdata.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Food and Wine Pairing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/jpg" href="images/favic4.png"/>

	

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> -->

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<!-- <script src="js/jquery.nicescroll.js"></script> -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	
	<section id="top">
		<div class="container">
			<div class="row">
				 <div class="col-md-7">
					<p  style="color:white;"><strong>For info : info@foodwine.com</strong> </p>
				</div> 
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						
						
					</ul>
				</div>
				<div class="col-md-2">
					<p  style="color:white;"><strong> &emsp;  &emsp; &emsp;  Food Wine Pairings</strong> </p>
				</div> 
				
			</div> <!-- End Of /.row  -->
		</div>	<!-- End Of /.Container -->
	
	
	<!-- MODAL Start
    	================================================== -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="#" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address"  type="text" id="email_create" name="email_create" value="" class="account_input">
					                    </span>
									</p>
									<p class="submit">
										<button class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container" >
			<div class="row" > 
				<div class="col-md-12">
					<a href="#">
						<img src="images/logo3.png" alt="logo">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	


	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="#">HOME</a></li>
					<li ><a href="categories.php">GATEGORIES</a></li>
					<li ><a href="tips.php">TIPS</a></li>
					<!--<li class="dropdown">
						<a href="#">
							PAGES
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						   <li><a  href="#">Action</a></li>
						    <li><a  href="#">Another action</a></li>
						    <li><a  href="#">Something else here</a></li>
						    <li><a  href="#">Separated link</a></li>
						</ul>
					</li>--> <!-- End of /.dropdown -->

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				
				<div class="col-md-6">
					<ol>
						<li class="centtitle"><h5>Interesting Facts About Wine </br></h4></li>	
						<li><h6>1. Grapes are the most planted fruit all over the world.</h5></li>								
						<li><h6>2. A ton of grapes can be produced into 720 bottles of wine.</h5></li>					
						<li><h6>3. There are 10,000 varieties of wine grapes existing worldwide.</h5></li>									
						<li><h6>4. A glass of good wine has a lengthy, more lingering aftertaste.</h5></li>										
						<li><h6>5. The largest bottle of wine is the "Nebuchadnezzar." It equates to 20 regular-sized bottles or around 15 liters.</h5></li>									
						<li><h6>6. "Toasting" originated in ancient Rome when they retained Greek traditions. It's derived from dropping a piece of toasted bread in wine to soften bitter tastes.</h5></li>									
						<li><h6>7. Wine meeting the air quickly spoils it.</h5></li>								
						<li><h6>8. The top three most significant producers of wine in the world are France, Spain, and Italy.</h5></li>										
						<li><h6>9. "Aroma" is the term for the fragrance of young wine, while "Mellow" is for old wine.</h5></li>	
						
					</ol>	
									
				</div>	<!-- End of /.col-md-12  &emsp;  &emsp;  &emsp; -->
				<div class="col-md-6">
					</br></br>
					<div id="slider" class="nivoSlider">
				    	<img src="images/wine11.jpg" alt="" />
				    	<img src="images/wine22.jpg" alt=""/>
				    	<img src="images/wine33.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->

			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->

	<!--
	<section id="yolo">
		<div class="container">
		</div>
	</section> -->
		


	<!-- CATAGORIE Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>POPULAR FOOD-WINE PAIRING CATEGORIES</h2>
						</div>	
						<div class="row">
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="meatCategory.php">
										<img src="images/steak.jpg" alt="...">
										<h3>Meat</h3>
									</a>
							      	<div class="caption">
							        	<p></p>
							        	<p>
							        		<a href="meatCategory.php" class="btn btn-default btn-transparent" role="button">
							        			<span><strong>Select</strong></span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="seafoodCategory.php">
										<img src="images/seafood.jpg" alt="...">
										<h3>Seafood</h3>
									</a>
							      	<div class="caption">
							        	<p></p>
							        	<p>
							        		<a href="seafoodCategory.php" class="btn btn-default btn-transparent" role="button">
							        			<span><strong>Select</strong></span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="pastaCategory.php">
										<img src="images/pasta.jpg" alt="...">
										<h3>Pasta</h3>
									</a>
							      	<div class="caption">
								        <p></p>
								        <p>
								        	<a href="pastaCategory.php" class="btn btn-default btn-transparent" role="button">
								        		<span><strong>Select</strong></span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="pizzaCategory.php">
										<img src="images/pizza.jpg" alt="...">
										<h3>Pizza</h3>
									</a>
							      	<div class="caption">
								        <p></p>
								        <p>
								        	<a href="pizzaCategory.php" class="btn btn-default btn-transparent" role="button">
								        		<span><strong>Select</strong></span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="vegetablesCategory.php">
										<img src="images/vegetables.jpg" alt="...">
										<h3>Vegetables</h3>
									</a>
							      	<div class="caption">
								        <p></p>
								        <p>
								        	<a href="vegetablesCategory.php" class="btn btn-default btn-transparent" role="button">
								        		<span><strong>Select</strong></span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="cheeseCategory.php">
										<img src="images/cheese.jpg" alt="...">
										<h3>Cheese</h3>
									</a>
							      	<div class="caption">
								        <p></p>
								        <p>
								        	<a href="cheeseCategory.php" class="btn btn-default btn-transparent" role="button">
								        		<span ><strong>Select</strong></span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block --> 
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->



	
		<!-- PRODUCTS Start
    ================================================== -->



	
	
		<!-- CALL TO ACTION Start
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<!--<div class="block-heading">
							<h2>Our Partners</h2>
						</div>-->
					</div>	<!-- End of /.block -->
					<div id="owl-example" class="owl-carousel">
						<!--<div> <img src="images/company-1.png" alt=""></div>
						<div> <img src="images/company-2.png" alt=""></div>
						<div> <img src="images/company-3.png" alt=""></div>
						<div> <img src="images/company-4.png" alt=""></div>
						<div> <img src="images/company-5.png" alt=""></div>
						<div> <img src="images/company-6.png" alt=""></div>
						<div> <img src="images/company-8.png" alt=""></div>
						<div> <img src="images/company-9.png" alt=""></div>-->
					</div>	<!-- End of /.Owl-Slider -->
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->
	
	


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<!-- <a href="#">
							<img src="images/footer-logo.png" alt="">
						</a>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</p> -->
						<h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-5">
					<div class="block">
						<a href="#">
							<img class="connect-heading" src="images/logo3r.png" alt="">
						</a>
						
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				
				<div class="col-md-3">
					<div class="block clearfix">
						<h4 class="connect-heading">GET IN TOUCH</h4>
						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>info@foodwine.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<!-- <div class="col-md-4">
					<div class="block">
						<h4>UPCOMING ITEMS</h4>
						<div class="media">
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						</div>	<!-- End Of /.media 
					</div>	<!-- End Of /.block 
				</div> <!-- End Of Col-md-3  --> 
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- <ul class="cash-out pull-left"> -->
							<!-- <li> -->
								<!-- <a href="#"> -->
									<!-- <img src="images/American-Express.png" alt="">	 -->
								<!-- </a> -->
							<!-- </li> -->
							<!-- <li> -->
								<!-- <a href="#"> -->
									<!-- <img src="images/PayPal.png" alt="">	 -->
								<!-- </a> -->
							<!-- </li> -->
							<!-- <li> -->
								<!-- <a href="#"> -->
									<!-- <img src="images/Maestro.png" alt="">	 -->
								<!-- </a> -->
							<!-- </li> -->
							<!-- <li> -->
								<!-- <a href="#"> -->
									<!-- <img src="images/Visa.png" alt="">	 -->
								<!-- </a> -->
							<!-- </li> -->
							<!-- <li> -->
								<!-- <a href="#"> -->
									<!-- <img src="images/Visa-Electron.png" alt="">	 -->
								<!-- </a> -->
							<!-- </li> -->
						<!-- </ul> -->
						<p class="copyright-text pull-right">Food Wine Pairings - 2022</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>