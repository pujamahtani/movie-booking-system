<!doctype html>
<html lang="en">
<?php

//session_start();
require_once("pages/includes/functions.php");
?>

<head>
	<!--META TAGS-->
	<meta charset="utf-8">

	<meta name="description" content="">

	<meta name="keywords" content="">

	<meta name="viewport" content="width=device-width initial-scale=1">

	<!--TTITLE OF THE PAGE-->
	<title>BookASeat</title>

	<!--LINKING OF ALL RESOURCES TO OUR PAGE-->
	<!--Favicon-->

	<link rel="shortcut icon" href="">
	<!--Fonts Used-->

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<!--FontAwesome 4.7.0-->
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<!-- BOOTSTRAP-->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!--owl carousel-->
	<link rel="stylesheet" href="plugins/OwlCarousel2-develop/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="plugins/OwlCarousel2-develop/assets/owl.theme.default.css">
	<!-- Start WOWSlider.com HEAD section -->


<!-- End WOWSlider.com HEAD section -->
	<!--CUSTOM STYLINGS-->

	<link rel="stylesheet" href="css/menu.css">
	
	<link rel="stylesheet" type="text/css" href="plugins/engine1/style.css" />
	<link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css">
	<!--END OF PLUGINS -->
</head>

<body>
	<!--NAVBAR-->
	
	
	<?php
session_start();
//$user_id = $_SESSION['user_id'];

//$user_email = getLoggedInUserName($user_id);
require_once("pages/includes/functions.php");
//session_destroy();
?>
<!--navbar-->
<div class="container-fluid" style="padding:0px">
	<div class="main-content">
		<div class="header">
			<div class="logo">
				<a href="pages/home.php">BookASeat</a>
			</div>
			<ul class="topnavbar">
				<li style="display:inline-block;margin:0 20px 0 20px;color:#d7263d"><i class="fa fa-search" style="margin-right:15px;"></i>
					<input type="text" placeholder="search movie" style="border-top-left-radius:4px;border-bottom-left-radius:4px;"><button  class="btn btn-outline-secondary" type="button" style="margin-left:0; border-top-left-radius:0;border-bottom-left-radius:0;margin-bottom:3px">GO</button></li>
				<li  style="display:inline-block;">
                <?php
                if(!isset($_SESSION['user_id'])){
                                    echo '<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Sign In</button>';
}
                    ?>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <p>x</p></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs">
												<li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
												<li><a href="#Registration" data-toggle="tab">Registration</a></li>
											</ul>
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active" id="Login">
													<form role="form" class="form-horizontal" action="http://<?php echo BASE_SERVER;?>/movie_booking/pages/process-login.php" method="post">
														<div class="form-group">
															<label for="email" class="col-sm-2 control-label">
                                        Email</label>
															<div class="col-sm-10">
																<input type="email" name="user_email" class="form-control" id="email1" placeholder="Email" />
<!--																<link rel="stylesheet" href="">-->
															</div>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
															<div class="col-sm-10">
																<input type="password" name="user_password" class="form-control pass" id="exampleInputPassword1" placeholder="Password" />
															</div>
														</div>
														<div class="row">
															<div class="col-sm-2">
															</div>
															<div class="col-sm-10">
																<button type="submit" name="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
																<a href="javascript:;">Forgot your password?</a>
															</div>
														</div>
													</form>
												</div>
												<div class="tab-pane" id="Registration">
													<form role="form" class="form-horizontal" action="http://<?php echo BASE_SERVER;?>/movie_booking/pages/process-register.php" method="post">

														<div class="form-group">
															<label for="email" class="col-sm-2 control-label">
                                        Email</label>
															<div class="col-sm-10">
																<input type="email" class="form-control" name="user_email" id="email" placeholder="Email" />
															</div>
														</div>

														<div class="form-group">
															<label for="password" class="col-sm-2 control-label">
                                        Password</label>
															<div class="col-sm-10">
																<input type="password" class="form-control" name="user_password" id="password" placeholder="Password" />
															</div>
														</div>
														<div class="row">
															<div class="col-sm-2">
															</div>
															<div class="col-sm-10">
																<button type="submit" class="btn btn-primary btn-sm" name="submit">
                                            Save & Continue</button>
																<button type="button" class="btn btn-default btn-sm" data-dismiss="modal" aria-hidden="true">
                                            Cancel</button>
															</div>
														</div>
													</form>
												</div>
											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

				</li>
				<?php
                if(isset($_SESSION['user_id'])){
                    
				echo '<li class="dropdown dropdown-user pull-right">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-user fa-2x"></i>
								<span class="username username-hide-on-mobile"></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <form>
                                <li>
                                    <a href="http://localhost/movie_booking/pages/process-logout.php"">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                                </form>
                            </ul>
                        </li>';
                    //here i need to do some logic for logout 
                }
                ?>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="bootstrap_container">
			<nav class="navbar navbar-default w3_megamenu" role="navigation">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="home.php" class="navbar-brand"><i class="fa fa-home black"></i></a>
				</div>
				<!-- end navbar-header -->

				<div id="defaultmenu" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="home.php" class="blue">Home</a></li>
						<!-- Mega Menu -->
						

						
						<li><a href="boxofficetop10.php" class="blue">Box Office Top 10</a>

							<!-- end dropdown-menu -->
						</li>
						<li><a href="About-us.php" class="blue">About</a>

							<!-- end dropdown-menu -->
						</li>
						<!-- end standard drop down -->
						<!-- end dropdown w3_megamenu-fw -->
					</ul>
					<!-- end nav navbar-nav -->

					<!-- end nav navbar-nav navbar-right -->
				</div>
				<!-- end #navbar-collapse-1 -->

			</nav>
			<!-- end navbar navbar-default w3_megamenu -->
		</div>
	</div>
</div>
<!-- end container -->
<!--NAVBAR ends-->

	
	
	
		<!--end navbar-->
		<!-- center portion-->
	
			<!-- Start WOWSlider.com BODY section -->
<!-- Start WOWSlider.com BODY section -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><a href="movie.php"><img src="plugins/data1/images/movie-7.jpg" alt="carousel jquery" id="wows1_0"/></a></li>
	<li><a href="movie.php"><img src="plugins/data1/images/movie-1.jpg" alt="movie-7" id="wows1_1"/></a></li>
	</ul></div>
	
<!-- End WOWSlider.com BODY section -->


		</div>
		<section class="movie-section">
			<div class="">
				<ul class="movie">
					<li>
						<h2>Movies</h2>
					</li>
					<li><a href="">Now Showing</a></li>
				</ul>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3 card">
							<p class="types">Recent Movies</p>
							<ul class="languages">
								<?php
									global $connection;
									$query = "select * from movie where is_deleted=0";
									$result = mysqli_query($connection,$query);
									while($row = mysqli_fetch_assoc($result)){
										echo "<li class='language'><a href='pages/movie.php?id=".$row['movie_id']."'>".$row['movie_name']."</a></li>";
									}
									?>
								
							</ul>
						</div>
						
						<?php
                        $query="select * from movie where is_deleted=0";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
                        {
                            echo "<a href='pages/movie.php?id=".$row['movie_id']."'><div class='card-movie'>
						    <div class='movie-img'>
						        <img src='images/".$row['movie_id'].".jpg' alt='no img' width='250px' height='334px'>
						    </div>
						    <div class='movie-details'>
						        <p>".$row['movie_name']."&nbsp&nbsp&nbsp<span>".$row['certification']."&nbsp&nbsp&nbsp</span>|&nbsp&nbsp&nbsp".$row['language']."</p>
						    </div>
						
						</div></a>";
                        }
                        ?>
					</div>
				</div>
			</div>
<!--<a href=""></a>-->
		</section>

		<!-- center ends-->
		<!--Footer-->
		<?php
    require_once("pages/includes/footer.php");		
    ?>
			<!--End Footer-->

			<!--Scripts start here -->
			<!--jQuery script-->
			<script src="plugins/jquery.min.js"></script>
			<!--Bootstrap Script-->
			<script src="plugins/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
			<!--owl-carosel-->

			<script src="plugins/OwlCarousel2-develop/owl.carousel.min.js"></script>
<!--			-->
            <script type="text/javascript" src="plugins/engine1/jquery.js"></script>
            <script type="text/javascript" src="plugins/engine1/wowslider.js"></script>
<script type="text/javascript" src="plugins/engine1/script.js"></script>
			<!--CUSTOM JS-->

			<script src="js/script.js"></script>
			<!--END OF CUSTOMS-->

			<!--SCRIPTS END-->
</body>

</html>
