<?php
require_once("includes/db.php");
require_once("includes/functions.php");
session_start();
if(isset($_POST['submit']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];

    $username=mysqli_real_escape_string($connection,$user_email);
    $password=mysqli_real_escape_string($connection,$user_password);
    
    $query = "insert into users(user_email,user_password) values('$user_email','$user_password')";
    
    $result = mysqli_query($connection,$query);
    checkQueryResult($result);
            

    //proceed if there is data else there will be errors
    
//    checkQueryResult($select_user_details);
//    echo ;
//    if(mysqli_num_rows($select_user_details)>1){
//        die("how?!");
//        //later we wud create a userfriendly error vala pg 
//    }
////            echo "hi";
////    echo mysqli_num_rows($select_user_details);
////$row = mysqli_fetch_assoc($select_user_details);
////    $db_passw/ord=$row['user_password'];
////        echo $db_password;
//    if($row = mysqli_fetch_assoc($select_user_details)){
////        //i have 1 row
////        $db_password=$row['user_password'];
////        $user_id=$row['user_id'];
////        echo "hi";
////        echo "hi";
//        $db_password=$row['user_password'];
////        echo $db_password;
//        
//    }else{
//        //in case of zero rows
//        $db_password="";
//    }
//    if(strcmp($db_password,$user_password)==0)
//        {
//            $_SESSION['user_id']=$employee_id;
//        
//            if($db_password=='pujamahtani')
//            {
//                header("Location: admindashboard.php");
//            }
//        else{
//                header("Location: homepage.php");
//
//            }
//        }
//    else{
//        die("kya baat hai bhai!");
//        }
//    if(password_verify($password,$db_password)){
//        $_SESSION['user_id']=$employee_id;
//        header("Location: admindashboard.php");
//    }else{
//        die("kya baat hai bhai!");
    
//    }
    header("Location: home.php");
}
?>