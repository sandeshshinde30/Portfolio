<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../CSS/admin1.css">
</head>
<body>

<header>
        
            <nav>
                <h3>Welcome</h3>
                <h2 id="admin">
                <?php

                    $AdminName =  $_SESSION['Admin_Name'];
                    echo $AdminName;
                ?>
                </h2>
                <div class="Heading" ><b><a href="student1.php" >Student Management</a></b></div>
                
                <div><a href="stud_add.php" class="sub_heading">Add Student</a></div>
                <div><a href="stud_update.php" class="sub_heading">Update Student</a></div>
                <div><a href="stud_delete.php" class="sub_heading">Delete Student</a></div>
                <div><a href="stud_display.php" class="sub_heading">Display Student</a> </div> <br>

                <div class="Heading"><a href="chatbot_management.php">ChatBot Management</a></div> 
                <div><a href="chatbot_management1.php" class="sub_heading">Add Q & A </a></div> <br>

                <div class="Heading"><a href="Chatbot.php">GPKP ChatBot</a></div>
            </nav>
    </header>

    <div class="container">
        <a href="student1.php">
            <span>Student Management</span>
        </a>
        <a href="chatbot_management.php">
            <span>CHATBOT Management</span>
        </a>
        <a href="ChatBot.php">
            <span>GPKP CHATBOT</span>
        </a>
        <a href="../HTML/Index.html">
            <span>Back</span>
        </a>
    </div>
</body>
</html>