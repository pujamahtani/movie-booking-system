<?php
require_once("../../pages/includes/functions.php");

echo "hi";
if(isset($_GET['id'])){
    $show_id=$_GET['id'];
    $query="update shows SET is_deleted = 1 Where show_id = $show_id";
    
    mysqli_query($connection,$query);
    echo "Deleted Successfully";
}
?>