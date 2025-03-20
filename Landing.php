<?php

include 'connect.php';

// session_start();

// $user_id = $_SESSION['user_id'];

// if (!isset($user_id)) {
//     header('location:login.php');
// }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NutriConnect</title>

        <!--link css file-->
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <!--link javascript file-->
        <script defer src="Script.js"></script>

    </head>
    <body>
        <div class="container1">
            <!--navigation bar in landing page-->
            <nav class="welcome-nav">
                <div class="logo">
                    <img src="images/logo1.png" alt="NutriConnect Logo">
                    <h2>NutriConnect</h2>
                </div>
                <div class="nav-welcome">
                    <ul id="nav-links">
                        <li><a href="register.php">Signup</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
            <!--Welcome-->
            <div class="welcome-section">
                <h1>Welcome to NutriConnect</h1>
                <p>NutriConnect is a food donation platform dedicated to
                    supporting children
                    in rural areas of Sri Lanka. By donating food or funds
                    through NutriConnect,
                    you can help provide nutritious meals to kids who need them
                    most. Together,
                    we can ensure that every child has the nourishment they need
                    to grow, learn, and thrive.
                    To learn more about NutriConnect or to make a donation,
                    please explore our website.</p>

                <!--learn-more button-->
                <div class="btn1">
                    <a href="login.php">Learn More</a>
                </div>
            </div>
        </div>
    </body>
</html>