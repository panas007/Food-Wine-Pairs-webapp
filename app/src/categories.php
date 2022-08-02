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
					<li class="active"><a href="categories.php">GATEGORIES</a></li>
					<li ><a href="tips.php">TIPS</a></li>				
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->




	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Categories</h1>
					<p>Choose food category to find the perfect wine pairings</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="index.php">Home</a></li>
					  	<li class="active">Categories</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->



	<!-- PRODUCTS Start
    ================================================== -->

	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<!-- <h2>NEW PRODUCTS</h2> -->
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
					        <li>
					            <div class="products">
									<a href="meatCategory.php">
										<img src="images/steak.jpg" alt="">
									</a>
									<a href="meatCategory.php">
										<h4>Meat</h4>
									</a>
									<p class="price"></p>
									<div >
										<a class="view-link shutter" href="meatCategory.php">
										<i class="fa fa-plus-circle"></i>Select</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="seafoodCategory.php">
										<img src="images/seafood.jpg" alt="">
									</a>
									<a href="seafoodCategory.php">
										<h4>Seafood</h4>
									</a>
									<p class="price"></p>
									<div >
										<a class="view-link shutter" href="seafoodCategory.php">
										<i class="fa fa-plus-circle"></i>Select</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="pastaCategory.php">
										<img src="images/pasta.jpg" alt="">
									</a>
									<a href="pastaCategory.php">
										<h4>Pasta</h4>
									</a>
									<p class="price"></p>
									<div >
										<a class="view-link shutter" href="pastaCategory.php">
										<i class="fa fa-plus-circle"></i>Select</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="pizzaCategory.php">
										<img src="images/pizza.jpg" alt="">
									</a>
									<a href="pizzaCategory.php">
										<h4>Pizza</h4>
									</a>
									<p class="price"></p>
									<div >
										<a class="view-link shutter" href="pizzaCategory.php">
										<i class="fa fa-plus-circle"></i>Select</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="vegetablesCategory.php">
										<img src="images/vegetables.jpg" alt="">
									</a>
									<a href="vegetablesCategory.php">
										<h4>Vegetables</h4>
									</a>
									<p class="price"></p>
									<div >
										<a class="view-link shutter" href="vegetablesCategory.php">
										<i class="fa fa-plus-circle"></i>Select</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					           <div class="products">
									<a href="cheeseCategory.php">
										<img src="images/cheese.jpg" alt="">
									</a>
									<a href="cheeseCategory.php">
										<h4>Cheese</h4>
									</a>
									<p class="price"></p>
									<div >
										<a class="view-link shutter" href="cheeseCategory.php">
										<i class="fa fa-plus-circle"></i>Select</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <!--  ... -->
					    </ul>
					</div>	<!-- End of /.products-grid -->

					<!-- Pagination -->

					<div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
						  	<li><a href="#">»</a></li>
						</ul>	<!-- End of /.pagination -->
					</div>
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
						</div>
						<div class="block">
							<div class="products">
								<a href="https://www.flickr.com/photos/alexbrn/4717565996/in/photostream/" target="_blank">
									<img src="images/cat_wines.jpg" alt="">
								</a>
							</div>
						</div>
						<!-- <div class="block">
							<h4>Latest Food Items</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Lamb leg roast
							      		<p>Lorem ipsum dolor sit amet.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img-2.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading"> Lamingtons
							      		<p>Lorem ipsum dolor.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img-3.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      		Anzac Salad
							      		<p>Lorem ipsum dolor sit.</p>

							      		</a>
							    	</div>
							  	</li>
							  </ul>
						</div> -->

						<!-- <div class="block">
							<h4>Food Tag</h4>
							<div class="tag-link">
								<a href="">BALLET</a>
								<a href="">CHRISTMAS</a>
								<a href="">ELEGANCE</a>
								<a href="">ELEGANT</a>
								<a href="">SHOPPING</a>
								<a href="">SHOP</a>
							</div>	
						</div>  --> 
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
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
