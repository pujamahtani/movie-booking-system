<!doctype html>
<html lang="en">
<?php

//session_start();
require_once("includes/functions.php");
		session_start();
if(!isset($_SESSION['user_id']))
	{
		header("Location:notloggedin.php");
	}
?>

<head>
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
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

<body onload="onLoaderFunc()">
	<div class="container">

		<div class="w3ls-reg">
			<!-- input fields -->
			<div class="inputForm">


				<div class="">
					<label> Number of Seats
                            <span>*</span>
                        </label>
					<input type="number" id="Numseats" required min="1">

				</div>
				<button onclick="takeData()" style="padding-top:10px; margin-top:10px;">Start Selecting</button>
			</div>
			<!-- //input fields -->

			<div class="seatStructure txt-center" style="overflow-x:auto;">
				<table id="seatsBlock">
					<p id="notification"></p>
					<tr>
						<td></td>
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td></td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>

					</tr>
					<tr>
						<td>A</td>
						<td>
							<input type="checkbox" class="seats" value="A1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A5">
						</td>
						<td class="seatGap"></td>
						<td>
							<input type="checkbox" class="seats" value="A6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="A14">
						</td>

					</tr>

					<tr>
						<td>B</td>
						<td>
							<input type="checkbox" class="seats" value="B1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="B6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="B14">
						</td>

					</tr>

					<tr>
						<td>C</td>
						<td>
							<input type="checkbox" class="seats" value="C1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="C6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="C14">
						</td>

					</tr>

					<tr>
						<td>D</td>
						<td>
							<input type="checkbox" class="seats" value="D1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="D6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="D14">
						</td>

					</tr>

					<tr>
						<td>E</td>
						<td>
							<input type="checkbox" class="seats" value="E1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="E6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="E14">
						</td>

					</tr>

					<tr class="seatVGap"></tr>

					<tr>
						<td>F</td>
						<td>
							<input type="checkbox" class="seats" value="F1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="F6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="F14">
						</td>

					</tr>

					<tr>
						<td>G</td>
						<td>
							<input type="checkbox" class="seats" value="G1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="G6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="G14">
						</td>

					</tr>

					<tr>
						<td>H</td>
						<td>
							<input type="checkbox" class="seats" value="H1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="H6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="H14">
						</td>

					</tr>

					<tr>
						<td>I</td>
						<td>
							<input type="checkbox" class="seats" value="I1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="I6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="I14">
						</td>

					</tr>

					<tr>
						<td>J</td>
						<td>
							<input type="checkbox" class="seats" value="J1">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J2">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J3">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J4">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J5">
						</td>
						<td></td>
						<td>
							<input type="checkbox" class="seats" value="J6">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J7">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J8">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J9">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J10">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J11">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J12">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J13">
						</td>
						<td>
							<input type="checkbox" class="seats" value="J14">
						</td>

					</tr>
				</table>

				<div class="screen">
					<h2 class="wthree">Screen this way</h2>
				</div>
				<button onclick="updateTextArea()">Confirm Selection</button>
			</div>
			<!-- //seat layout -->
			<!-- details after booking displayed here -->
			<form action='seatsallocate.php' method='get'>
			
				   <input type="text" id="seatsDisplay" name="seats">
				   <input type='text' id='NumberDisplay' name='NumberDisplay'>
				   <?php
							echo"
					<input type='hidden' id='NumberDisplay' name='screen_id' value='".$_GET['screen_id']."'>
				   <input type='hidden' id='NumberDisplay' name='show_id' value='".$_GET['show_id']."'>";
						?>



					<input type='submit' name='submit' id='submit' value='submit' class='btn btn-default' style='margin-top:30px; margin-left:210px; padding:10px 30px;'>

			</form>
			<!-- //details after booking displayed here -->
		 			
		
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
	<script>
		function onLoaderFunc() {
			$(".seatStructure *").prop("disabled", true);
			$(".displayerBoxes *").prop("disabled", true);
		}

		function takeData() {
			if (($("#Numseats").val().length == 0)) {
				alert(" Number of Seats");
			} else {
				$(".inputForm *").prop("disabled", true);
				$(".seatStructure *").prop("disabled", false);
				document.getElementById("notification").innerHTML =
					"<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
			}
		}


		function updateTextArea() {

			if ($("input:checked").length == ($("#Numseats").val())) {
				$(".seatStructure *").prop("disabled", true);

				var allNameVals = [];
				var allNumberVals = [];
				var allSeatsVals = [];

				//Storing in Array
				allNameVals.push($("#Username").val());
				allNumberVals.push($("#Numseats").val());
				$('#seatsBlock :checked').each(function() {
					allSeatsVals.push($(this).val());
				});

				//Displaying 
				$('#nameDisplay').val(allNameVals);
				$('#NumberDisplay').val(allNumberVals);
				$('#seatsDisplay').val(allSeatsVals);
			} else {
				alert("Please select " + ($("#Numseats").val()) + " seats")
			}
		}


		function myFunction() {
			alert($("input:checked").length);
		}

		/*
		function getCookie(cname) {
		    var name = cname + "=";
		    var ca = document.cookie.split(';');
		    for(var i = 0; i < ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0) == ' ') {
		            c = c.substring(1);
		        }
		        if (c.indexOf(name) == 0) {
		            return c.substring(name.length, c.length);
		        }
		    }
		    return "";
		}
		*/


		$(":checkbox").click(function() {
			if ($("input:checked").length == ($("#Numseats").val())) {
				$(":checkbox").prop('disabled', true);
				$(':checked').prop('disabled', false);
			} else {
				$(":checkbox").prop('disabled', false);
			}
		});

	</script>

	<script src="../js/script.js"></script>
	<!--END OF CUSTOMS-->

	<!--SCRIPTS END-->
</body>

</html>
