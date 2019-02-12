<?php


require_once("../../pages/includes/functions.php");


   $sql = "SELECT * FROM screen
         WHERE theatre_id LIKE '%".$_GET['id']."%'"; 


    $resultset = mysqli_query($connection, $sql);
//$row = mysqli_fetch_assoc($result)

   $json = [];
   while($row = mysqli_fetch_assoc($resultset)){
        $json[$row['screen_id']] = $row['screen_no'];
   }


   echo json_encode($json);

   if(isset($_GET['add_show']))
{
    
    $show_time=$_GET['show_time'];
    $movie_id=$_GET['movie_id'];
    $theatre_id=$_GET['theatre_id'];
    $screen_id=$_GET['screen_id'];
       $show_date=$_GET['show_date'];
       $price=$_GET['price'];
    function insert($tableName, $columns, $values){
        global $connection;
        $query = "INSERT INTO $tableName($columns) VALUES ($values)";

        $resultset = mysqli_query($connection, $query);
        checkQueryResult($resultset);
        return $resultset;
    }
    
    $tablename="shows";
    $columns="show_time,movie_id,theatre_id,show_date,screen_id,price";
    $values="'$show_time',$movie_id,$theatre_id,'$show_date',$screen_id,$price";
    
    $result=insert($tablename,$columns,$values);
    //product added!
    
    
    
   
    
    echo "ADDED";
    header("Location:showaddpage.php");
    
}
?>