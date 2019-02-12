<?php
require_once("../../pages/includes/functions.php");

echo "hi";
if(isset($_GET['id'])){
    $movie_id=$_GET['id'];
    $query="update movie SET is_deleted = 1 Where movie_id = $movie_id";
    
    mysqli_query($connection,$query);
    echo "Deleted Successfully";
}
?>