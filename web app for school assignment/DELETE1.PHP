<?php



require_once('config/db.php');
if(isset($_GET['delete_id'])){

    
    $Staff_ID =$_GET['delete_id'];


    $sql = "DELETE FROM staff WHERE staff_id = '$Staff_ID'";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo"deleted ";
    }else{
       die(mysqli_error($conn));
    }



}