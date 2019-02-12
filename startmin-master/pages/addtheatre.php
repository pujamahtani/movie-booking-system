<?php

require_once("../../pages/includes/functions.php");



   if(isset($_GET['add_theatre']))
{
    
    $theatre_name=$_GET['theatre_name'];
    $theatre_city=$_GET['theatre_city'];
    $theatre_loc=$_GET['theatre_loc'];
    $no_of_screens=$_GET['no_of_screens'];
//       $price=$_GET['price'];
    function insert($tableName, $columns, $values){
        global $connection;
        $query = "INSERT INTO $tableName($columns) VALUES ($values)";

        $resultset = mysqli_query($connection, $query);
        checkQueryResult($resultset);
        return $resultset;
    }
    
    $tablename="theatre";
    $columns="theatre_name,theatre_city,theatre_loc,no_of_screens";
    $values="'$theatre_name','$theatre_city','$theatre_loc',$no_of_screens";
    
    $result=insert($tablename,$columns,$values);
    //product added!
    
    
    
   
    
    echo "ADDED";
    
    
}
?>