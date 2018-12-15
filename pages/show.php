<!doctype html>
<html lang="en">
<?php

//session_start();
require_once("includes/functions.php");
//		session_start();

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
<div class="container-fluid big-box" style="padding:0px;height:371px">
			<!-- center portion-->
			

		
		<?php
					$thismovie_id=$_GET['id'];
			$query="select * from movie where is_deleted=0 and movie_id=$thismovie_id";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
						{
							echo "<div class='small-box2'>
				<img src='../images/".$row['movie_id'].".jpg' alt=''>
				<h2 class='small-box2-heading'>".$row['movie_name']."</h2>
				<h4 class='movie-types'>".$row['certification']."&nbsp|&nbsp".$row['language']."</h4>
				<h4 class='movie-types1'>".$row['genre']."</h4>

				<p class='movie-types2'><i class='fa fa-clock-o'></i>".$row['duration']."</p>

		</div>
		<ul class='ratings' style='background:white'>
			<li class='rating heart' style='padding-left:230px'><i class='like fa fa-heart'></i><b>87%</b></li>
			<li class='rating' style='padding-left:230px'><i class='like-star fa fa-star'></i>
				<i class='like-star fa fa-star'></i>
				<i class='like-star fa fa-star'></i>
				<i class='like-star fa fa-star'></i>
				<i class='fa fa-star-o'></i>
				<p>".$row['critics_rating']."</p>
			</li>
			<li class='rating' style='padding-left:230px'><i class='like-star fa fa-star'></i>
				<i class='like-star fa fa-star'></i>
				<i class='like-star fa fa-star'></i>
				<i class='fa fa-star-o'></i>
				<i class='fa fa-star-o'></i>
				<p>".$row['users_rating']."</p>
			</li>
			
		</ul>";
						}
	?>
	</div>
	<?php
	
				$thismovie_id=$_GET['id'];
	$query="select theatre.theatre_name,shows.show_time,shows.show_id,screen.screen_id,movie.movie_name,screen.capacity from movie,shows,theatre,screen where movie.is_deleted=0 and shows.movie_id=$thismovie_id and movie.movie_id=$thismovie_id and shows.theatre_id=theatre.theatre_id and shows.screen_id=screen.screen_id and shows.movie_id=movie.movie_id and screen.theatre_id=theatre.theatre_id";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
						{
							$capacity=$row['capacity'];
							if($capacity==120)
							{
								$url='seat1.php';
							}
							else if($capacity==100)
							{
								$url='seat2.php';
							}
							else if($capacity==140){
								$url='seat3.php';
							}
							echo "<div class='container-fluid'>
										<ol class='breadcrumb'>
											  <li class='breadcrumb-item active'>".$row['theatre_name']."</li>
											  <a href='".$url."?show_id=".$row['show_id']."&screen_id=".$row['screen_id']."' class='show-time'>".$row['show_time']."</a>
										</ol>

									</div>";
						}
	?>
	
		
		
	  
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
