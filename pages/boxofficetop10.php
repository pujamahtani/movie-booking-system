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
<!--	<link rel="stylesheet" href="../css/style.css" />-->
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--<link rel="stylesheet" href="../css/style.css"/>-->
	<!--END OF PLUGINS -->
</head>

<body>
	<!--NAVBAR-->
	<?php
    require_once("includes/header.php");		
    ?>
		<!--end navbar-->
    <h1 align="center" style="font-size:35px; color:#0e5268;">Box Office Top 10</h1>
	<div class="main-container-bx" style="width:100%; height:900px;">
	    
	    <div class="images-div" style="width:1000px; margin-left:250px;padding-top:50px; box-sizing:border-box;height:1000px">
	        
	        <?php
            $query="select * from movie where is_deleted=0";
                        $res=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $percent=(($row['users_rating']+$row['critics_rating'])/2)*20;
                            $height=(($row['users_rating']+$row['critics_rating'])/2)*60;
                            $width=(($row['users_rating']+$row['critics_rating'])/2)*50;
                            echo "<a href='movie.php?id=".$row['movie_id']."'><div style='width:".$width."px; height: ".($height+55)."px; margin-right: 50px; float: left; display:inline-block; margin-top:30px; background: #fff;border-radius:5px;'>
                <h3 style='color:#0e5268; font-size:22px;' align='center'>".$percent."%</h3>
	            <img src='../images/".$row['movie_id'].".".$row['img_extension']."' alt='no imgs' height='".$height."px' width='".$width."px'>
                <h3 style='color:#d7263d; font-size:18px; padding-top:10px;' align='center'>".$row['movie_name']."</h3>
	        </div></a>";
                        }
            ?>
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
