<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['update_cart'])) {
   $cart_id = $_POST['cart_id'];
   $cart_quantity = $_POST['cart_quantity'];
   mysqli_query($conn, "UPDATE `m_cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
   $message[] = 'cart quantity updated!';
}

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `m_cart` WHERE id = '$delete_id'") or die('query failed');
   header('location:menu_cart.php');
}

if (isset($_GET['delete_all'])) {
   mysqli_query($conn, "DELETE FROM `m_cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:menu_cart.php');
}

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
   <link rel="stylesheet" href="css/cart_menu.css">
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
         <a href="about.php">About Us</a>
         <a href="treatment.php">Treatment</a>
         <a href="donation.php">Food Donate</a>
         <a href="money.php">Money Donate</a>
         <a href="menu.php">Order</a>
         <a href="contact.php">Contact Us</a>
      </nav>

      <div class="icons">
         <a href="profile.php" class="fa-solid fa-user"></a>
         <a href="logout.php" class="fa-solid fa-user-xmark"></a>
      </div>

   </div>

   <!-- <section class="homes6">
    <div class="contentts">
    <span data-aos="fade-up" data-aos-delay="150">Welcome To</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Cart</h3>
    </div>
    </section> -->


   <section class="shopping-cart">

      <h1 class="heading">Your Cart</h1>

      <div class="box-container">
         <?php
         $grand_total = 0;
         $select_cart = mysqli_query($conn, "SELECT * FROM `m_cart` WHERE user_id = '$user_id'") or die('query failed');
         if (mysqli_num_rows($select_cart) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
               ?>
               <div class="box">
                  <a href="menu_cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times"
                     onclick="return confirm('Delete this from cart?');"></a>
                  <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="">
                  <div class="name"><?php echo $fetch_cart['name']; ?></div>
                  <div class="price">LKR. <?php echo $fetch_cart['price']; ?>/-</div>
                  <form action="" method="post">
                     <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                     <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                     <input type="submit" name="update_cart" value="update" class="option-btn">
                  </form>
                  <div class="sub-total"> Sub Total : <span>LKR.
                        <?php echo $sub_total = ($fetch_cart['quantity'] * $fetch_cart['price']); ?>/-</span> </div>
               </div>
               <?php
               $grand_total += $sub_total;
            }
         } else {
            echo '<p class="empty">Your Cart is Empty</p>';
         }
         ?>
      </div>

      <div style="margin-top: 2rem; text-align:center;">
         <a href="menu_cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>"
            onclick="return confirm('Delete all from cart?');">Delete All</a>
      </div>

      <div class="cart-total">
         <p>Grand Total : <span>LKR. <?php echo $grand_total; ?>/-</span></p>
         <div class="flex">
            <a href="menu.php" class="option-btn">Continue Ordering</a>
            <a href="menu_checkout.php" class="btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Proceed to
               Checkout</a>
         </div>
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

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>