<?php

include 'connect.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('1query failed');

   if (mysqli_num_rows($select_users) > 0) {
      $message[] = 'User Already Exist!';
   } else {
      if ($pass != $cpass) {
         $message[] = 'Confirm Password not matched!';
      } else {
         mysqli_query($conn, "INSERT INTO `users`(name, email, number, address ,password, user_type) VALUES('$name', '$email','$number','$address', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'Registered Successfully!';
         header('location:login.php');
      }
   }

}

// if (isset($_POST['submit'])) {
//    echo "<script>alert('Registered Successfully!')</script>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="css/styles.css">

   <!--- Password validation Css code ---->
   <style>
      #message {
         display: none;
         background: #f1f1f1;
         color: #000;
         position: relative;
         padding: 20px;
         margin-top: 10px;
      }

      #message p {
         padding: 10px 35px;
         font-size: 18px;
      }

      .valid {
         color: green;
      }

      .valid:before {
         position: relative;
         left: -3px;
         content: "✔";
      }

      .invalid {
         color: red;
      }

      .invalid:before {
         position: relative;
         left: -35px;
         content: "✖";
      }
   </style>


   <!--- Password validation Css code ---->
   <style>
      #message {
         display: none;
         background: #f1f1f1;
         color: #000;
         position: relative;
         padding: 20px;
         margin-top: 10px;
      }

      #message p {
         padding: 10px 35px;
         font-size: 18px;
      }

      .valid {
         color: green;
      }

      .valid:before {
         position: relative;
         left: -3px;
         content: "✔";
      }

      .invalid {
         color: red;
      }

      .invalid:before {
         position: relative;
         left: -35px;
         content: "✖";
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

   <section class="contact_us">

      <div class="row_us">

         <!--navigation bar -->
         <div class="container2">
            <nav class="welcome-nav">
               <div class="logo">
                  <a href="welcome.html"><img src="images/logo1.png" alt="NutriConnect_logo"></a>
                  <h2>NutriConnect</h2></a>
               </div>

            </nav>
            <!--Signup form-->
            <section class="signup-container">
               <div class="wording">
                  <h2>Join Us</h2>
                  <p>Imagine a world where no child has to go to bed hungry.
                     With NutriConnect, you can be the change that turns this
                     dream into a reality. By signing up today, you're empowering
                     children to focus on their dreams, not their hunger.
               </div>
               <form action="" method="post" class="signup-form">
                  <input type="text" name="name" placeholder="Enter Your Name" required class="form-input">
                  <input type="email" name="email" placeholder="Enter Your Email" required class="form-input">
                  <input type="text" name="number" placeholder="Enter Your Number" required class="form-input">
                  <input type="text" name="address" placeholder="Enter Your Address" required class="form-input">
                  <input type="password" id="PSW" name="password" placeholder="Enter Your Password" required class="form-input"
                     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                     title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                  <input type="password" name="cpassword" placeholder="Confirm Your Password" required class="form-input">
                  <select name="user_type" class="box">
                     <option value="user">User</option>
                     <option value="admin">Admin</option>
                  </select>
                  <input type="submit" name="submit" value="Register Now" class="submit-button">
                  <p>Already have an account? <a href="login.php">Login Now</a></p>
               </form>
            </section>

         </div>
         <!--Validation msg box-->
         <div id="message">
            <h3> Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>Uppercase</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>

         </div>
         <script>
            var myInput = document.getElementById("PSW");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            // When the user clicks on the password field, show the message box
            myInput.onfocus = function () {
               document.getElementById("message").style.display = "block";
            }

            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function () {
               document.getElementById("message").style.display = "none";
            }

            // When the user starts to type something inside the password field
            myInput.onkeyup = function () {
               // Validate lowercase letters
               var lowerCaseLetters = /[a-z]/g;
               if (myInput.value.match(lowerCaseLetters)) {
                  letter.classList.remove("invalid");
                  letter.classList.add("valid");
               } else {
                  letter.classList.remove("valid");
                  letter.classList.add("invalid");
               }

               // Validate capital letters
               var upperCaseLetters = /[A-Z]/g;
               if (myInput.value.match(upperCaseLetters)) {
                  capital.classList.remove("invalid");
                  capital.classList.add("valid");
               } else {
                  capital.classList.remove("valid");
                  capital.classList.add("invalid");
               }

               // Validate numbers
               var numbers = /[0-9]/g;
               if (myInput.value.match(numbers)) {
                  number.classList.remove("invalid");
                  number.classList.add("valid");
               } else {
                  number.classList.remove("valid");
                  number.classList.add("invalid");
               }

               // Validate length
               if (myInput.value.length >= 8) {
                  length.classList.remove("invalid");
                  length.classList.add("valid");
               } else {
                  length.classList.remove("valid");
                  length.classList.add("invalid");
               }
            }
         </script>

   </section>


</body>

</html>