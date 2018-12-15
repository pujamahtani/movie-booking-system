<?php
session_start();
require_once("includes/functions.php");

$seats=$_GET['seats'];
$amount=$_GET['amount'];
$pay_mode=$_GET['mode'];
$num_seats=$_GET['numseats'];
$show_id=$_GET['show_id'];
$user_id=$_SESSION['user_id'];

echo $user_id; 
echo "<br>";
	echo $amount; 
echo "<br>";

echo $pay_mode;
echo "<br>";

echo $num_seats;
echo "<br>";

echo $user_id;
echo "<br>";

echo $show_id;
echo "<br>";

    
    $tablename="payment";
    $columns="user_id,amount,pay_mode";
    $values="$user_id,$amount,$pay_mode";
    
    $result=insert($tablename,$columns,$values);
$payment_id=mysqli_insert_id($connection);
echo "payment added!";
	
	$tablename="ticket";
    $columns="show_id,payment_id,seat_id";
$seats_arr=preg_split("/\,/",$seats);
//	print_r($seats_arr);
	foreach($seats_arr as $seat_name)
	{
		$query="select seat_id from seats where seat_name='$seat_name' and show_id = $show_id";
		$res = mysqli_query($connection, $query);
		$row=mysqli_fetch_assoc($res);
		$seat_id=$row['seat_id'];
			$values="$show_id,$payment_id,$seat_id";
    
    $result=insert($tablename,$columns,$values);
	}
echo "tickets added!";
    function insert($tableName, $columns, $values){
        global $connection;
        $query = "INSERT INTO $tableName($columns) VALUES ($values)";

        $resultset = mysqli_query($connection, $query);
//        checkQueryResult($resultset);
        return $resultset;
    }
//header("Location: ticket.php?numseats=$num_seats&show_id=$show_id&amount=$amount&seats=$seats")
?>