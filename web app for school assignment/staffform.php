
<?php



require_once('config/db.php');


if (isset($_POST['submit'])) {
    $student_ID = $_POST['StaffID'];
    $studentName = $_POST['staffName'];
    $studentAddress = $_POST['staffAddress'];
    $studentCourse = $_POST['staffdepartment'];

    $sql = "INSERT INTO `staff` (`Staff_ID`, `Staff Name`, `Staff Address`, `Staff department`) 
    values ('$student_ID','$studentName','$studentAddress','$studentCourse')";
    $result=mysqli_query($conn,$sql);
    
    /*if($result){
        echo" data inserted succesfully";

    }else{
        echo"data not inserted succesfully";
    }*/
   
}




?>






<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <link rel="icon" href="https://cdn.iconscout.com/icon/premium/png-256-thumb/biography-4589744-3797199.png" type="image/x-icon">
</head>
<style>
       
       
        h2 {
            color: #0044cc; /* Dark blue color for heading */
            
        }

        form {
            background-color: #fff; /* White background for form */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        label {
            color: #0044cc; /* Dark blue color for labels */
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #0044cc; /* Dark blue color for button */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #003399; /* Slightly darker blue on hover */
        }
    </style>


<body>
    
<form  method="post">
        <label for="StaffID">Staff ID:</label>
        <input type="text" id="StaffID" name="StaffID" >
        
        <label for="staffName">staff Name:</label>
        <input type="text" id="staffName" name="staffName" required>
        
        <label for="staffAddress">staff Address:</label>
        <input type="text" id="staffAddress" name="staffAddress" required>
        
        <label for="staffdepartment">Staff department:</label>
        <input type="text" id="staffdepartment" name="staffdepartment" required>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>