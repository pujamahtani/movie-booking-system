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
		<div class="container-fluid big-box" style="padding:0px">
			<!-- center portion-->
			
			<?php
			$thismovie_id=$_GET['id'];
			$query="select * from movie where is_deleted=0 and movie_id=$thismovie_id";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
						{
							echo "<iframe width='100%' height='375px' src='".$row['movie_link']."' allowfullscreen></iframe>";
						}
			?>
<!--			<iframe width="100%" height="375px" src="https://www.youtube.com/embed/2iVYI99VGaw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->

<!--			<div class="small-box">-->
<!--				<img src="../images/img1.jpg" alt="">-->
<!--				<h2 class="small-box-heading">Andhadhun</h2>-->
<!--				<h4 class="movie-type">UI|HINDI</h4>-->
<!--				<h4 class="movie-type1">Thriller</h4>-->

<!--				<p class="movie-type2">2hrs 20min</p>-->

<!--			</div>-->
			<?php
			$thismovie_id=$_GET['id'];
			$query="select * from movie where is_deleted=0 and movie_id=$thismovie_id";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
						{
							echo"<div class='small-box'>
				<img src='../images/".$row['movie_id'].".jpg' alt='no-img'>
				<h2 class='small-box-heading'>".$row['movie_name']."</h2>
				<h4 class='movie-type'>".$row['certification']."|".$row['language']."</h4>
				<h4 class='movie-type1'>".$row['genre']."</h4>

				<p class='movie-type2'>".$row['duration']."</p>

			</div>";
						}
			?>

		</div>
		<ul class="ratings">
			<li class="rating heart"><i class="like fa fa-heart"></i><b>87%</b></li>
			<li class="rating"><i class="like-star fa fa-star"></i>
				<i class="like-star fa fa-star"></i>
				<i class="like-star fa fa-star"></i>
				<i class="like-star fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<p>critics rating</p>
			</li>
			<li class="rating"><i class="like-star fa fa-star"></i>
				<i class="like-star fa fa-star"></i>
				<i class="like-star fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
				<p>Users rating</p>
			</li>
			
			<?php
				$thismovie_id=$_GET['id'];
			
			echo "<li class='book'><a href='show.php?id=".$thismovie_id."' style='text-decoration:none' class='btn1 btn-default pull-right'>Book Tickets</a></li>";
				
				?>
		</ul>
		<div class="container synopsis">
			<div class="row">
				<div class="col-md-6 col-md-offset-1">
					
					<?php
					$thismovie_id=$_GET['id'];
			$query="select * from movie where is_deleted=0 and movie_id=$thismovie_id";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
						{
					echo "<h2 class='synopsis-heading'>Synopsis</h2>
					<p class='synopsis-para'>".$row['movie_desc']."</p>
					<div class='row'>
						<div class='col-md-3'>
							<p class='synopsis-para'><b>Release Date</b></p>
							<p class='synopsis-para'>".$row['release_date']."</p>
						</div>
						<div class='col-md-3'>
							<p class='synopsis-para'><b>Rating</b></p>
							<p class='synopsis-para'>".$row['critics_rating']."</p>
						</div>
				    </div>
					<div class='row'>
						<div class='col-md-3'>
							<p class='synopsis-para'><b>Runtime</b></p>
							<p class='synopsis-para'>".$row['duration']."</p>
						</div>
						<div class='col-md-3'>
							<p class='synopsis-para'><b>Genre</b></p>
							<p class='synopsis-para'>".$row['genre']."</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-3'>
							<p class='synopsis-para'><b>Formats</b></p>
							<p class='synopsis-para'>".$row['format']."</p>
						</div>
                    </div>";
						}
					?>

				</div>
			</div>
		</div>
		

		<!--end centre-->
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
