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
    <div class="container booking-summary table">
    	<div class="booking-summary-wrap table-cell">
    		<div class="booking">
    			<span class="circle-left"></span>
    			<span class="circle-right"></span>
    			<h2 class="payment-heading">Booking Summary</h2>
    			
    			<?php
				$show_id=$_GET['show_id'];
				$query="select movie_name,screen_no,theatre_name,theatre_loc,theatre_city  from movie,shows,theatre,screen,ticket where screen.screen_id=shows.screen_id and shows.theatre_id=theatre.theatre_id and shows.movie_id = movie.movie_id and shows.is_deleted=0 and ticket.show_id=shows.show_id and shows.show_id=$show_id and ticket.payment_id=payment_id";
				$res=mysqli_query($connection,$query);
				$row=mysqli_fetch_assoc($res);
				echo "<ul>
    				<li>
    					<div class='row'>
    						<div class='col-md-12'>
    							<div class='col-md-6'>
    								<h class='booking-details'>".$row['movie_name']."</h>
    							</div>
								<div class='col-md-6'>
   						            <h class='booking-details'>".$_GET['numseats']." Tickets</h>
   						       </div>
    						</div>
    					</div>
    				</li>
    				<li>
    					<div class='row'>
    						<div class='col-md-12'>
    							<div class='col-md-6'>
    								<h class='booking-details'>Seats:<br>".$_GET['seats']."</h>
    							</div>
								<div class='col-md-6'>
   						            <h class='booking-details'>Bill:<br>Rs ".$_GET['amount']."</h>
   						       </div>
    						</div>
    					</div>
    				</li>
    				<li>
    				   <div class='row'>
    						<div class='col-md-12'>
    							<div class='col-md-6'>
    								<h class='booking-details'>Internet fees</h>
    							</div>
								<div class='col-md-6'>
   						            <h class='booking-details'>Rs 50</h>
   						            
   						       </div>
   						     </div>
    					</div>
    				</li>
					<li>
    				   <div class='row'>
    						<div class='col-md-12'>
    							<div class='col-md-6'>
    								<h class='booking-details'> Screen:".$row['screen_no']."</h>
    							</div>
								<div class='col-md-6'>
   						            <h class='booking-details'>".$row['theatre_name']."<br>".$row['theatre_loc']."<br>".$row['theatre_city']."</h>
   						            
   						       </div>
   						     </div>
    					</div>
    				</li>
    				<hr>
    				<li>
    					<div class='row'>
    						<div class='col-md-12'>
    							<div class='col-md-6'>
    								<h class='booking-details'>Sub Total</h>
    							</div>
								<div class='col-md-6'>
   						            <h class='booking-details'>Rs ".($_GET['amount']+50)."</h>
   						            
   						       </div>
   						     </div>
    					</div>
    				</li>
    				<li>
    					<div class='row'>
    						<div class='col-md-12' style='background:#fffcdc; padding:20px'>
    							<div class='col-md-6'>
    								<h class='booking-details' >Amount Payable</h>
    							</div>
								<div class='col-md-6'>
   						            <h class='booking-details'>Rs ".($_GET['amount']+50)."</h>
   						            
   						       </div>
   						     </div>
    					</div>
    				</li>
    				
    			</ul>
    		";
				
				?>
    			</div>
    	</div>
    	<ul><li><a href="home.php" class="btn btn-default pull-right" style="margin-right:50px; margin-bottom:20px;padding:10px;">Want to Book More??</a></li></ul>
    </div>



























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
