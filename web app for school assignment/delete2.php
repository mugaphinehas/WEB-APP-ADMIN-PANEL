<?php



require_once('config/db.php');
if(isset($_GET['delete_id'])){

    
    $course_ID =$_GET['delete_id'];


    $sql = "DELETE FROM courses WHERE course_id = '$course_ID'";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo"deleted ";
    }else{
       die(mysqli_error($conn));
    }



}