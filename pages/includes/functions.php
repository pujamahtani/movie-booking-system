<?php
require_once("db.php");
function checkQueryResult($resultset)
{
	global $connection;
	if(!$resultset)
	{
		die("QUERY FAILED : " . mysqli_error($connection));
	}
}
function getLoggedInUserName($loggedInID)
{
	global $connection;
	$query = "SELECT * FROM users WHERE user_id = $loggedInID";
	$user_details = mysqli_query($connection,$query);
	checkQueryResult($user_details);
	if($row = mysqli_fetch_assoc($user_details))
	{
		return ( $row['user_email']);
	}
}
function redirect($url){
    header("Location: $url");
    exit();
}

?>