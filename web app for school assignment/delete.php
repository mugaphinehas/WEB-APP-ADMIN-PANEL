<?php



require_once('config/db.php');
if(isset($_GET['delete_id'])){

    
    $Student_ID =$_GET['delete_id'];


    $sql = "DELETE FROM students WHERE student_id = '$Student_ID'";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo"deleted ";
    }else{
       die(mysqli_error($conn));
    }



}


