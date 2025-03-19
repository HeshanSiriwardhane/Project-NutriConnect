<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `d_cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'Already Added to Cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `d_cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Product Added to Cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NutriConnect</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/donateschool.css">

</head>

<body>

   <?php include 'header.php'; ?>


   <section class="products">

      <h1 class="heading">Donation Food Items</h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `donation`") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
               ?>
               <form action="" method="post" class="box">
                  <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                  <div class="name"><?php echo $fetch_products['name']; ?></div>
                  <div class="price">LKR. <?php echo $fetch_products['price']; ?>/-</div>
                  <input type="number" min="1" name="product_quantity" value="1" class="qty">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="Add to Donation Cart" name="add_to_cart" class="btn">
               </form>
               <?php
            }
         } else {
            echo '<p class="empty">No Products added yet!</p>';
         }
         ?>
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

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>