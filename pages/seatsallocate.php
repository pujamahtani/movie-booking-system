<?php
require_once("includes/functions.php");

if(isset($_GET['submit']))
{
	
	$seats=$_GET['seats'];
	$show_id=$_GET['show_id'];
	$screen_id=$_GET['screen_id'];
	$no_of_seats=$_GET['NumberDisplay'];
//	$user_id=$_SESSION['user_id'];
	echo $seats;
	$seats_arr=preg_split("/\,/",$seats);
	print_r($seats_arr);
	foreach($seats_arr as $seat_name)
	{
		$query="insert into seats(screen_id,show_id,seat_name,is_reserved) values($screen_id,$show_id,'$seat_name',1)";
		$res=mysqli_query($connection,$query);
		echo "done";
			
	}
	$query1="select price from shows where show_id=$show_id";
		$res=mysqli_query($connection,$query1);
	$row=mysqli_fetch_assoc($res);
	$amount=$row['price'];
	$total_amount=$amount*$no_of_seats;
	echo $total_amount;
	header("Location:payment.php?numseats=$no_of_seats&show_id=$show_id&amount=$total_amount&seats=$seats");
}
?>
