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

<!--    <link rel="stylesheet" href="../css/menu.css">-->

    <link rel="stylesheet" type="text/css" href="../plugins/engine1/style.css" />
<!--    <link href="../css/footer.css" rel="stylesheet" type="text/css" media="all" />-->
<!--    <link rel="stylesheet" href="../css/style.css">-->
    <!--END OF PLUGINS -->
    <style>
		.pay-details{
			padding-top: 10px;
		}
		.pay-details label{
			padding-right: 15px;
			font-size: 16px;
		}
		.total{
			font-size: 18px;
			letter-spacing: 1.5px;
			color:#0e5268;
		}
		.btn{
			background: #d7263d;
			color: #f9f8f8;
			padding:10px;
			margin-left: 20px;
			margin-bottom:5px;
			font-size: 16px;
			overflow: none;
		}
		.btn:hover{
			background: #f7263d;
			color: white;
		}
	</style>
</head>

<body>




    <div class="container" align="center" style="margin-top:120px">
        <h3 style="padding-bottom:10px; letter-spacing:1.5px;">Payment Details</h3>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Credit/Debit</a></li>
            <li><a data-toggle="tab" href="#menu1">Paytm</a></li>

        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <form action="paymenteval.php" method="get" role="form">


                    <div class="form-group container" style="padding-top:30px;">
                        <div class="row">
                            <div class="col-md-8 pay-details">
                               <div class="col-md-4">
                                <label for="">Name:</label>
                                </div>
                                <div class="col-md-4">
                                <input type="text" placeholder="Name" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                              <div class="col-md-8 pay-details">
                               <div class="col-md-4">
                                <label for="">Card No:</label>
                                </div>
                                 <div class="col-md-4">
                                <input type="text" placeholder="card No" class="form-control">
                                 </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8 pay-details">
                                 <div class="col-md-4">
                                <label for="">CVV:</label>
                                 </div>
                                  <div class="col-md-4">
                                <input type="text" placeholder="cvv" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8 pay-details">
                               <div class="col-md-4">
                                <label for="">Expiry Date:</label>
                                </div>
                                <div class="col-md-4">
                                <input type="text" placeholder="dd-mm-yyy" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <?php
                                echo "
                                <a href='paymenteval.php?mode=1&show_id=".$_GET['show_id']."&numseats=".$_GET['numseats']."&amount=".$_GET['amount']."&seats=".$_GET['seats']."' class='btn btn-default' style='margin-top:20px;'>Make Payment</a>"
                            ?>
                            </div>
                        </div>


                    </div>

                </form>

            </div>
            <div id="menu1" class="tab-pane fade">
                <div class="form-group container">
                    <div class="row">
                        <div class="col-md-8 pay-details">
                            <div class="col-md-4">
                            <label for="">Paytm ID</label>
                            </div>
                             <div class="col-md-4">
                            <input type="text" placeholder="ID" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                                echo "
                                <a href='paymenteval.php?mode=2&show_id=".$_GET['show_id']."&numseats=".$_GET['numseats']."&amount=".$_GET['amount']."&seats=".$_GET['seats']."' class='btn btn-default' style='margin-top:20px;'>Make Payment</a>"
                            ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="pull-right total">
           
            <label for="">Total Amount:</label>
            
          <?php  echo"<h2>Rs ".$_GET['amount']."</h2>";  ?>
        </div>
    </div>

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
