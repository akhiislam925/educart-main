<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
     <!-- pages/home.php -->
<div class="home">
   <h2 style="color:#5A3E79; font-family:cursive; ">Your Go-To Tool for Smart Question Creation.<span id="user-name">User</span>!</h2>
    <p style="font-size:larger";>Drafting Tailored Question Papers for You. Let’s get started!</p>
    

    
    <div class="bottom">
   <!-- <a href="?page=dashboard">Dashboard</a>
    <a href="?page=add-courses">Add Courses</a>
    <a href="?page=add-outcomes">Add Outcomes</a>
    <a href="?page=add-questions">Add Question</a>
-->

            <h4>Dashboard</h4>
        <ul>
            <li><button onclick="window.location.href='?page=add-courses'">Courses</button></li>
            <li><button onclick="window.location.href='?page=add-questions'">Generate Questions</button></li>
            <li><button onclick="window.location.href='?page=add-outcomes'">Outcome Assessment</button></li>
            <li><button onclick="window.location.href='?page=dashboard'">Generate Report</button></li>
            </ul>
   
</div>
</div>

    <script src="assets/js/home.js"></script>
</body>
</html>