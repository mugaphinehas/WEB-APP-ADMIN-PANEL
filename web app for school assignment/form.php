
<?php



require_once('config/db.php');


if (isset($_POST['submit'])) {
    $student_ID = $_POST['studentID'];
    $studentName = $_POST['studentName'];
    $studentAddress = $_POST['studentAddress'];
    $studentCourse = $_POST['studentCourse'];

    $sql = "INSERT INTO `students` (`Student_ID`, `Student Name`, `Student Address`, `Student Course`) 
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
        <label for="studentID">Student ID:</label>
        <input type="text" id="studentID" name="studentID" >
        
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" required>
        
        <label for="studentAddress">Student Address:</label>
        <input type="text" id="studentAddress" name="studentAddress" required>
        
        <label for="studentCourse">Student Course:</label>
        <input type="text" id="studentCourse" name="studentCourse" required>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
