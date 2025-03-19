<?php

include 'connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
  header('location:home.php');
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NutriConnect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cart.css">
  <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>


  <div class="headers">
    <a href="home.php" class="logo">
      <div class="lo">
        <img src="images/logo1.png" style="width: 60px; height:60px">
      </div> NutriConnect
    </a>
    <nav class="navbar">
      <a class="active" href="home.php">Home</a>
      <a href="donation.php">Food Donate</a>
      <a href="money.php">Money Donate</a>
      <a href="menu.php">Order</a>
      <a href="treatment.php">Treatment</a>
      <a href="contact.php">Contact Us</a>
    </nav>

    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <a href="profile.php" class="fa-solid fa-user"></a>
      <a href="logout.php" class="fa-solid fa-user-xmark"></a>
    </div>

  </div>


  <section class="user-details">
    <div class="user">
      <?php
      $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
      if (mysqli_num_rows($select) > 0) {
        $fetch = mysqli_fetch_assoc($select);
      }
      ?>

      <img src="images/user-icon.png" alt="">
      <p class="name"><i class="fas fa-user"></i><?php echo $fetch['name']; ?></p>
      <p class="number"><i class="fas fa-phone"></i><?php echo $fetch['number']; ?></p>
      <p class="email"><i class="fas fa-envelope"></i><?php echo $fetch['email']; ?></p>
      <p class="address"><i class="fas fa-map-marker-alt"></i><?php echo $fetch['address']; ?></p>
      <a href="update_profile.php" class="btn" name="submit">Update Info</a>

    </div>

  </section>


  <!-- footer -->
  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>Follow Us On :</h3>
        <div class="share">
          <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
          <a href="https://twitter.com/login" class="fab fa-twitter"></a>
          <a href="https://www.instagram.com/accounts/login/" class="fab fa-instagram"></a>
          <a href="https://www.linkedin.com/login" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <h3>Contact Info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +94 77 656 6326</a>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +94 77 274 5029 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i></a>
        <a href="mailto:vishadisr@gmail.com" class="links"> vishadisr@gmail.com </a>
        <a href="mailto:mayumishehara2601@gmail.com" class="links"> mayumishehara2601@gmail.com </a>
        <a href="mailto:hirunilanka@gmail.com" class="links"> hirunilanka@gmail.com </a>
        <a href="mailto:heshansiriwardhana@gmail.com" class="links"> heshansiriwardhana@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Colombo, Sri Lanka</a>
      </div>

      <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
        <a href="donation.php" class="links"> <i class="fas fa-arrow-right"></i> Donation </a>
        <a href="menu.php" class="links"> <i class="fas fa-arrow-right"></i> Order </a>
        <a href="treatment.php" class="links"> <i class="fas fa-arrow-right"></i> Treatment </a>
        <a href="contact.php" class="links"> <i class="fas fa-arrow-right"></i> Contact Us </a>
      </div>

      <div class="box">
        <h3>Newsletter</h3>
        <p>Subscribe for latest updates</p>
        <input type="email" placeholder="Your Email" class="email">
        <input type="submit" value="Subscribe" class="btn">
        <img src="images/payment.png" class="payment-img" alt="Payment Methods">
      </div>

    </div>

    <div class="credit">&copy;2025 Created by <span> Team Four Fronts </span> | All Rights Reserved </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="js/style.js"></script>

</body>

</html>