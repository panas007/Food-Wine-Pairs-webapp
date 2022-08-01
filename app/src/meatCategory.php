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
		        	<li ><a href="index.php">HOME</a></li>
					<li ><a href="categories.php">GATEGORIES</a></li>
					<li ><a href="tips.php">TIPS</a></li>

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->



	<!-- Breadcrumbs Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Meat Category</h1>
					<p>Select & pair</p>
				</div>	<!-- End of /.col-md-4 -->	
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="index.php">Home</a></li>
					  	<li class="active">meatCategory</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->


	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9 clearfix">
					<ul class="blog-zone">
					    <li>
					        <div class="blog-icon">
					        	<i class="fa fa-glass	"></i>
					        </div>
					        <div class="blog-box">
					        	<!--<img src="images/blog-1.jpg" alt="">-->
					            
					            <div class="blog-post-body clearfix">
						            <a href="meatCategory.php">
					            		<h2>Select your favorite Meat</h2>
						            </a>
						            <p>Here you can see the perfect pairings for different cuts of steak , BBQ , Thai food , and many more</p>
									</br></br>
						            <!-- <a href="blog-single.html" class="btn btn-default btn-transparent pull-right" role="button">
								        <span>Read More</span>
								    </a> -->
									
									<div class="box col-md-5 clearfix">
									  <select id="selbox" class="ddlCars">
										<option>Sirloin</option>
										<option>Ribeye</option>
										<option>Porterhouse & T-Bone</option>
										<option>Filet Mignon</option>
										<option>Strip</option>
										<option>Rump</option>
										<option>Flank & Skirt </option>
										<option>Brisket</option>
									  </select>
									  
									  
									</div>
									
									<div class="box col-md-7 ">
									
									<button id="mbut" class="button-15" role="button">Pair it</button>

									<!-- <button class="noselect">Yo</button> -->
									<!-- <button class="noselect"></button> -->
									</div>

								


					            </div>
								<div id="responce" class="blog-post-body clearfix">
									
								</div>

								
								
								
					        </div>	<!-- End of /.blog-box -->
					    </li>
						 
					    <li>
						
					        <div class="blog-icon">
					        	<i class="fa fa-thumbs-o-up"></i>
					        </div>
							<div class="blog-box-2">
							</div>
						
						</li>
						
					</ul>

					        

					<!-- Pagination 
					 <ul class="pagination pull-right">
					  	<li class="disabled"><a href="#">&laquo;</a></li>
					  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
					  	<li><a href="#">2</a></li>
					  	<li><a href="#">3</a></li>
					  	<li><a href="#">4</a></li>
					  	<li><a href="#">»</a></li>
					</ul>	<!-- End of /.pagination -->
				</div>	<!-- End of /.col-md-9 -->

				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Catagories</h4>
							<div class="list-group">
								<a href="meatCategory.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Meats
								</a>
								<a href="seafoodCategory.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Seafood
								</a>
								<a href="pastaCategory.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Pasta
								</a>
								<a href="pizzaCategory.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Pizza
								</a>
								<a href="vegetablesCategory.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Vegetables
								</a>
								<a href="cheeseCategory.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Cheese
								</a>
							</div>
						</div>	<!-- End of /.block -->
						<div class="blog-sidebar">
							<h4>Quik wine tip</h4>
							<p><span style="color:black;font-weight:bold">Wine is a great ingredient in marinades.</span></p>
							<ul style="color:#000000;font-family:Open Sans;list-style-type:disc;">
							<li>Wine is basically an acid ingredient 
							(which helps tenderize the outside of the meat) 
							and it has a lot of flavor. 
							The wine-based marinade helps keep meats moist while it cooks, too.
							</li>
							</ul>
						</div>	<!-- End of /.block -->


					</div>	<!-- End of /.blog-sidebar -->
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Blog -->








<!-- FOOTER Start
    ================================================== -->

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
	<script>

		var sel = document.getElementById('selbox');
		var type = "pair"

		document.getElementById('mbut').onclick = function () {
			var opt = sel.value;   
		
			$.ajax({
				url: "requestDB.php",
				type: "get", //send it through get method
				data: { 
					type: type, 
					food: opt
				},
				success: function(response) {
					var ajaxDisplay = document.getElementById("responce");
					ajaxDisplay.innerHTML = response;
				},
				error: function(xhr) {
					ajaxDisplay.innerHTML = "Error on server, please try again";
				}
			});
		}
    	
    </script>

</body>
</html>