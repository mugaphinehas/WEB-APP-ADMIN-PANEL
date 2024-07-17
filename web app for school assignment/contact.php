<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrique Academy - Contact Us</title>
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
        main .p1{
            font-weight: 100;

        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label{
            color: blue;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            height: 35vh;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 12px;
            background-color: none;
            
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 12px;
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
    </nav>




    
    <main>
        <h2>Contact Us</h2>
        <p class="p1">We'd love to hear from you! Contact us at info@enriqueacademy.com.</p>
    </main>
    <form action="mailto:your@email.com" method="POST">
        <label for="email">Email us:</label>
        <input type="text" id="email" name="email" required>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>
