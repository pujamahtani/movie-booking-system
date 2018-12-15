<?php
require_once("includes/db.php");
require_once("includes/functions.php");
session_start();
if(isset($_POST['submit']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    echo $user_email;
    $username=mysqli_real_escape_string($connection,$user_email);
    $password=mysqli_real_escape_string($connection,$user_password);
    
    $query = "SELECT * FROM users WHERE user_email = '$user_email'";
	$select_user_details = mysqli_query($connection,$query);
	checkQueryResult($select_user_details);
    if(mysqli_num_rows($select_user_details)>1){
        die("how?!");
        //later we wud create a userfriendly error vala pg 
    }
//            echo "hi";
//    echo mysqli_num_rows($select_user_details);
//$row = mysqli_fetch_assoc($select_user_details);
//    $db_passw/ord=$row['user_password'];
//        echo $db_password;
    if($row = mysqli_fetch_assoc($select_user_details)){
//        //i have 1 row
//        $db_password=$row['user_password'];
//        $user_id=$row['user_id'];
//        echo "hi";
//        echo "hi";
		$user_id = $row['user_id'];
        $db_password=$row['user_password'];
//        echo $db_password;
        
    }else{
        //in case of zero rows
        $db_password="";
    }
    if(strcmp($db_password,$user_password)==0)
        {
            $_SESSION['user_id']=$user_id;
        
            if($db_password=='pujamahtani')
            {
                header("Location: ../startmin-master/pages/admindashboard.php");
            }
        else{
                header("Location: home.php");

            }
        }
    else{
        die("wrong email or password");
        }
//    if(password_verify($password,$db_password)){
//        $_SESSION['user_id']=$employee_id;
//        header("Location: admindashboard.php");
//    }else{
//        die("kya baat hai bhai!");
//    }
}
?>