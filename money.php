<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $amount = $_POST['amount'];
   $method = mysqli_real_escape_string($conn, $_POST['method']);

   $select_message = mysqli_query($conn, "SELECT * FROM `money_donate` WHERE name = '$name' AND email = '$email' AND number = '$number' AND amount = '$amount' AND method = '$method'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Sent Already!';
   }else{
      mysqli_query($conn, "INSERT INTO `money_donate`(user_id, name, email, number,amount, method) VALUES('$user_id', '$name', '$email', '$number', '$amount','$method')") or die('query failed');
      $message[] = ' Sent Successfully!';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Food Donation Gallery</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/money.css">
   <link rel="stylesheet" href="css/donateschool.css">
   <link rel="stylesheet" href="css/checkoutNew.css">


</head>
<body>
   
<div class="headers">
        <a href="home.php" class="logo">
        <div class="lo">
            <img src="img/logo.jpeg" style="width: 100px; height:65px">
        </div> Food Donation Gallery</a>
        <nav class="navbar">
        <a class="active" href="home.php">Home</a>
            <a href="donation.php">Donation</a>
            <a href="menu.php">Order</a>
            <a href="treatment.php">Treatment</a>
            <a href="contact.php">Contact Us</a>
        </nav>
    
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="profile.php" class="fa-solid fa-user"></a>
            <a href="logout.php" class="fa-solid fa-user-xmark"></a>
        </div>
    
    </div>

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="Search Here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <section class="home1">
    <div class="contentts">
        <span data-aos="fade-up" data-aos-delay="150">Welcome To</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Money Donation</h3>
    </div>

   </section>


<div class="sch-container">

<div class="sch-box-container">

    <div class="sch-box">
        <h3>Rs. 100</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>

    <div class="sch-box">
        <h3>Rs. 500</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>

    <div class="sch-box">
        <h3>Rs. 1000</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>

    <div class="sch-box">
        <h3>Rs. 2000</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>

    <div class="sch-box">
        <h3>Rs. 5000</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>

    <div class="sch-box">
        <h3>Rs. 10000</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>

    <div class="sch-box">
        <h3>Rs. 20000</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>

    <div class="sch-box">
        <h3>Rs. 50000</h3>
        <a href="moneyCheckout.php" class="sch-btn">Donate Now</a>
    </div>


</div>

</div>

<!-- collect details form -->
<section class="contact_us">

<div class="row_us">

   <div class="image">
      <img src="img/mo.jpg" alt="">
   </div>

   <form action="" method="post">
      <h3>Fill Your Details</h3>
      <input type="text" name="name" maxlength="50" class="box" placeholder="Enter Your Name" required>
      <input type="text" name="number" min="0" max="9999999999" class="box" placeholder="Enter Your Mobile Number" required maxlength="10">
      <input type="text" name="amount" min="0" max="9999999999" class="box" placeholder="Enter Donate Amount" required maxlength="10">
      <input type="text" name="email" maxlength="50" class="box" placeholder="Credit Card Number" required>
      <select name="method" class="box">
                        <option value="month">Expire Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
      </select>

      <select name="year" class="box">
                            <option value="exp">Expire Year</option>
                           <option value="2023">2023</option>
                           <option value="2024">2024</option>
                           <option value="2025">2025</option>
                           <option value="2026">2026</option>
                           <option value="2027">2027</option>
                           <option value="2028">2028</option>
      </select>
      <input type="text" name="cvv" maxlength="50" class="box" placeholder="CVV" required>

      <input type="submit" value="Donate" name="send" class="btn" onclick="return confirm('Are you confirm the donation?');">
   </form>

</div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>