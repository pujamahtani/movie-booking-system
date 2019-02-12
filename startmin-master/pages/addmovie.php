
<?php
session_start();
require_once("../../pages/includes/functions.php");
//echo "hi";
//$employee_id=$_SESSION['employee_id'];
//==============================Sample code to upload any image to a file==========================================
//$image_name=$_FILES['product_image']['name'];
//$image_size=$_FILES['product_image']['size'];
//$temp_name=$_FILES['product_image']['tmp_name'];
//$file_type=$_FILES['product_image']['type'];
//
//$file_extension= strtolower(end(explode(".",$image_name)));
//
//echo "'$image_name'<br>";
//echo "$image_size<br>";
//echo "$temp_name<br>";
//echo "$file_type<br>";
//echo "$file_extension<br>";
//
//$valid_extensions=array("jpeg","jpg","png");
//
//if(in_array($file_extension,$valid_extensions)==false)
//{
//    $error_msg[]="image is not valid!choose a jpg or png file";
//}
//if($image_size>2097152)
//{
//    $error_msg[]="choose a smaller file!";
//}
//if(empty($error_msg))
//{
//    move_uploaded_file($temp_name,"../../../assets/product/images/".$image_name);
//    echo "File succesfully uploaded!";
//}
//else{
//    print_r($error_msg);
//}
//===================================sample code ends here=========================================================
    
//$var=isset($_POST['movie_name']);
//echo "set?=".$var;
if(isset($_POST['add_movie']))
{
//    echo isset($_FILES['movie_image']);
    //checking whether the file was uploaded or not
    if(isset($_FILES['movie_image']))
    {
        //yes the file was uploaded so we are initialising the required variables
        $image_name=$_FILES['movie_image']['name'];
        $image_size=$_FILES['movie_image']['size'];
        $temp_name=$_FILES['movie_image']['tmp_name'];
        $file_type=$_FILES['movie_image']['type'];

        $file_extension= strtolower(end(explode(".",$image_name)));
    }
//    echo $file_extension;
//    echo $image_name;
    $movie_name=$_POST['movie_name'];
    $release_date=$_POST['release_date'];
    $certification=$_POST['certification'];
    $genre=$_POST['genre'];
    $format=$_POST['format'];
    $duration=$_POST['duration'];
    $director=$_POST['director'];
    $cast=$_POST['cast'];
    $users_rating=$_POST['users_rating'];
    $critics_rating=$_POST['critics_rating'];
    $language=$_POST['language'];
	$movie_desc=$_POST['movie_desc'];
	$movie_link=$_POST['movie_link'];
    
    
//    echo $file_extension;
    function insert($tableName, $columns, $values){
    global $connection;
    $query = "INSERT INTO $tableName($columns) VALUES ($values)";
    
    $resultset = mysqli_query($connection, $query);
    checkQueryResult($resultset);
    return $resultset;
    }
    
    $tablename="movie";
    $columns="movie_name,release_date,certification,genre,format,duration,director,cast,users_rating,critics_rating,language,img_extension,movie_desc,movie_link";
    $values="'$movie_name',$release_date,'$certification','$genre','$format','$duration','$director','$cast',$users_rating,$critics_rating,'$language','$file_extension','$movie_desc','$movie_link'";
    
    $result=insert($tablename,$columns,$values);
    //product added!
        $movie_id=mysqli_insert_id($connection);

    
    
   
    if(isset($_FILES['movie_image']))
    {
        move_uploaded_file($temp_name,"../../images/".$movie_id.".".$file_extension);
    }
    echo "ADDED";
    
    
}
?>