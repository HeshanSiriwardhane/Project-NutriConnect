<?php

include 'connect.php';
session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select_users) > 0) {

      $row = mysqli_fetch_assoc($select_users);

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_home.php');

      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }

   } else {
      $message[] = 'Incorrect Email or Password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <script src="https://kit.fontawesome.com/357d9ef974.js" crossorigin="anonymous"></script>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/login.css">
   <link rel="stylesheet" href="./css/styles.css">
   <link rel="stylesheet" href="./css/welcone.css">


   <script src="Script.js"></script>


   <style>
      .forgot {
         font-size: 1.4rem;
         margin-top: 15px;
         margin-bottom: -20px;
         color: #0000FF;
      }
   </style>

</head>

<body>


   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }
   ?>

   <div class="container3">
      <nav class="welcome-nav">
         <div class="logo">
            <a href="home.php"><img src="images/logo1.png" alt="NutriConnect_logo"></a>
            <h2>NutriConnect</h2></a>
         </div>
         <a href="#">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
         </a>

      </nav>

      <section class="login-container">
         <form action="" method="post" class="login-form">
            <h1 class="login-title">Food Forward, Access Your Account</h1>
            <p class="login-subtitle">Your contribution matters.</p>
            <img loading="lazy"
               src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e1bbe8ddb89e25507af43eb76c90dd70bdbb3235babb4f0fb2926f6525ebdea?placeholderIfAbsent=true&apiKey=cd27c29e2a6240788feabe97bf4dd976"
               class="login-logo" alt="Food Forward logo" />

            <input type="email" name="email" id="email" class="input-field" placeholder="E-mail" required />
            <input type="password" name="password" id="password" class="input-field" placeholder="Password" required />
            <input type="submit" value="Login" name="submit" class="login-button"></button>
            <a href="register.php" >Don't have an account ? Register Now</a>

         </form>
      </section>

   </div>




</body>

</html>