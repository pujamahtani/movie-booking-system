<?php

require_once("../../pages/includes/functions.php");



   if(isset($_GET['add_screen']))
{
    
    $theatre_id=$_GET['theatre_id'];
    $screen_no=$_GET['screen_no'];
    $capacity=$_GET['capacity'];
//    $no_of_screens=$_GET['no_of_screens'];
//       $price=$_GET['price'];
    function insert($tableName, $columns, $values){
        global $connection;
        $query = "INSERT INTO $tableName($columns) VALUES ($values)";

        $resultset = mysqli_query($connection, $query);
        checkQueryResult($resultset);
        return $resultset;
    }
    
    $tablename="screen";
    $columns="theatre_id,screen_no,capacity";
    $values="$theatre_id,$screen_no,$capacity";
    
    $result=insert($tablename,$columns,$values);
    //product added!
    
    
    
   
    
    echo "ADDED";
    
    
}
?>