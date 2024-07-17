<?php



require_once('config/db.php');
$query = "select * from courses";
$result = mysqli_query($conn,$query);


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrique Academy - Courses</title>
        <link rel="icon" href="https://cdn.iconscout.com/icon/premium/png-256-thumb/biography-4589744-3797199.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f8ff;
        }
        header {
            background-color: #0056b3;
            color: white;
            padding: 1em;
            text-align: center;
        }
        nav {
            background-color: #004080;
            overflow: hidden;
            top: 0;
            position: sticky;
            z-index: 1000;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #003366;
        }
        main {
            padding: 20px;
            text-align: center;
        }

        .container{
            background-color: black;
            height:25px;
            width:200vh;
            color: black;
            margin-left: 65px;

        }

        .container h6{
            color: white;
            font-size:16px;
            text-align: center;

            
        }
        table{
            margin-left:365px;
        }
        .students1{
            width: 100%;
            border-collapse: collapse;
            
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-weight: bold;
            background-color: none;
        }
        th {
            background-color: black;
            color: white;
        }


        .delete_btn{
            
            background-color: red;
            border-radius: 12px;
            width: auto;
            

        }
        .delete_btn a{
            text-decoration: none;
            color: white;
        font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Enrique Academy</h1>
    </header>
    <nav>
        <a href="home.php">Home</a>
        <a href="students.php">Students</a>
        <a href="staff.php">Staff</a>
        <a href="courses.php">Courses</a>
        <a href="contact.php">Contact Us</a>
        <a href="staffform.php" onclick="window.open('coursesform.php', 'newwindow', 'width=70%,height=250'); return false;">Add course</a>
    </nav>






    <main>
        <h2>Courses</h2>
        <p>Explore our wide range of courses designed to help you succeed.</p>
    </main>

   
    <table class="student1">
        <thead>
            <tr>
                <th>course ID</th>
                <th>course Name</th>
                <th>course type</th>
                <th>course instructor</th>
               
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php  echo $row ['course_ID']?></td>
                <td><?php  echo $row ["course Name"]?></td>
                <td><?php  echo $row ["course type"]?></td>
                <td><?php echo $row ["course instructor"]?></td>
              
                <td class="delete_btn"><a href="delete2.php?delete_id=<?php  echo $row ['course_ID']; ?>">DELETE</a></td>
             
                
            
            </tr> 
            <?php

                }
            ?>  
            <!-- Add more rows as needed -->
        </tbody>
    </table>

</body>
</html>
