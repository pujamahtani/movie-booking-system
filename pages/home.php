<!doctype html>
<html lang="en">
<?php

//session_start();
require_once("includes/functions.php");
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
	<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
	<!-- BOOTSTRAP-->
	<link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
	<!--owl carousel-->
	<link rel="stylesheet" href="../plugins/OwlCarousel2-develop/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../plugins/OwlCarousel2-develop/assets/owl.theme.default.css">
	<!-- Start WOWSlider.com HEAD section -->


<!-- End WOWSlider.com HEAD section -->
	<!--CUSTOM STYLINGS-->

	<link rel="stylesheet" href="../css/menu.css">
	
	<link rel="stylesheet" type="text/css" href="../plugins/engine1/style.css" />
	<link href="../css/footer.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/style.css">
	<!--END OF PLUGINS -->
</head>

<body>
	<!--NAVBAR-->
	<?php
    require_once("includes/header.php");		
    ?>
		<!--end navbar-->
		<!-- center portion-->
		<div>
			<!-- Start WOWSlider.com BODY section -->
<!-- Start WOWSlider.com BODY section -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><a href="movie.php"><img src="../plugins/data1/images/movie-7.jpg" alt="carousel jquery" id="wows1_0"/></a></li>
	<li><a href="movie.php"><img src="../plugins/data1/images/movie-1.jpg" alt="movie-7" id="wows1_1"/></a></li>
	</ul></div>
	
<!-- End WOWSlider.com BODY section -->


		</div>
		<section class="movie-section">
			<div class="">
				<ul class="movie">
					<li>
						<h2>Movies</h2>
					</li>
					<li><a href="home.php">Now Showing</a></li>
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
										echo "<li class='language'><a href='movie.php?id=".$row['movie_id']."'>".$row['movie_name']."</a></li>";
									}
									?>
								
							</ul>
						</div>
						
						<?php
                        $query="select * from movie where is_deleted=0";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
                        {
                            echo "<a href='movie.php?id=".$row['movie_id']."'><div class='card-movie'>
						    <div class='movie-img'>
						        <img src='../images/".$row['movie_id'].".jpg' alt='no img' width='250px' height='334px'>
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
    require_once("includes/footer.php");		
    ?>
			<!--End Footer-->

			<!--Scripts start here -->
			<!--jQuery script-->
			<script src="../plugins/jquery.min.js"></script>
			<!--Bootstrap Script-->
			<script src="../plugins/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
			<!--owl-carosel-->

			<script src="../plugins/OwlCarousel2-develop/owl.carousel.min.js"></script>
<!--			-->
            <script type="text/javascript" src="../plugins/engine1/jquery.js"></script>
            <script type="text/javascript" src="../plugins/engine1/wowslider.js"></script>
<script type="text/javascript" src="../plugins/engine1/script.js"></script>
			<!--CUSTOM JS-->

			<script src="../js/script.js"></script>
			<!--END OF CUSTOMS-->

			<!--SCRIPTS END-->
</body>

</html>
