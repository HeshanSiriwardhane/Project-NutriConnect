<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['order_btn'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = $_POST['number'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $address = mysqli_real_escape_string($conn, 'flat no. ' . $_POST['flat'] . ', ' . $_POST['street'] . ', ' . $_POST['city'] . ', ' . $_POST['country'] . ' - ' . $_POST['pin_code']);
    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products[] = '';

    $cart_query = mysqli_query($conn, "SELECT * FROM `m_cart` WHERE user_id = '$user_id'") or die('query failed');
    if (mysqli_num_rows($cart_query) > 0) {
        while ($cart_item = mysqli_fetch_assoc($cart_query)) {
            $cart_products[] = $cart_item['name'] . ' (' . $cart_item['quantity'] . ') ';
            $sub_total = ($cart_item['price'] * $cart_item['quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ', $cart_products);

    $order_query = mysqli_query($conn, "SELECT * FROM `menu_orders` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('query failed');

    if ($cart_total == 0) {
        $message[] = 'Your Cart is Empty';
    } else {
        if (mysqli_num_rows($order_query) > 0) {
            $message[] = 'Order Already Placed!';
        } else {
            mysqli_query($conn, "INSERT INTO `menu_orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
            $message[] = 'Order Placed Successfully!';
            mysqli_query($conn, "DELETE FROM `m_cart` WHERE user_id = '$user_id'") or die('query failed');
        }
    }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/checkoutNew.css">

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
            <a href="treatment.php">Treatments</a>
            <a href="donation.php">Food Donate</a>
            <a href="money.php">Money Donate</a>
            <a href="menu.php">Orders</a>
            <a href="menu_orders.php">Menu Orders</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <!-- <i class="fas fa-search" id="search-icon"></i> -->
            <a href="profile.php" class="fa-solid fa-user"></a>
            <a href="logout.php" class="fa-solid fa-user-xmark"></a>
        </div>

    </div>

    <div class="heading">
        <h3>Menu Checkout</h3>
    </div>

    <section class="display-order">

        <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `m_cart` WHERE user_id = '$user_id'") or die('query failed');
        if (mysqli_num_rows($select_cart) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
                $grand_total += $total_price;
                ?>
                <p> <?php echo $fetch_cart['name']; ?>
                    <span>(<?php echo 'LKR. ' . $fetch_cart['price'] . '/-' . ' x ' . $fetch_cart['quantity']; ?>)</span>
                </p>
                <?php
            }
        } else {
            echo '<p class="empty">Your Cart is Empty</p>';
        }
        ?>
        <div class="grand-total"> Grand Total : <span>LKR. <?php echo $grand_total; ?>/-</span> </div>

    </section>



    <div class="container">

        <form action="" method="post">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>Full Name :</span>
                        <input type="text" name="name" placeholder="Heshan Kavinda Siriwardhane">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="text" name="email" placeholder="heshan@gmail.com">
                    </div>
                    <div class="inputBox">
                        <span>Phone Number :</span>
                        <input type="text" name="number" placeholder="0714081819">
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" name="address" placeholder="No. 1/A, Main Road, Matara">
                    </div>
                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" name="city" placeholder="Matara">
                    </div>


                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>Cards Accepted :</span>
                        <img src="images/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Name on Card :</span>
                        <input type="text" name="cname" placeholder="S J H Kavinda">
                    </div>
                    <div class="inputBox">
                        <span>Credit Card Number :</span>
                        <input type="text" name="method" placeholder="2222 3333 4444 5555">
                    </div>
                    <div class="inputBox">
                        <span>Expire Month :</span>
                        <select name="month">
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
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Expire Year :</span>
                            <select name="year">
                                <option value="2023">2025</option>
                                <option value="2024">2026</option>
                                <option value="2025">2027</option>
                                <option value="2026">2028</option>
                                <option value="2027">2029</option>
                                <option value="2028">2030</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" name="cvv" placeholder="123">
                        </div>
                    </div>

                </div>

            </div>

            <input type="submit" value="Order Now" class="submit-btn" name="order_btn"
                onclick="return confirm('Do you need to confirm Order?');">

        </form>

    </div>

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
    <script src="Script.js"></script>

</body>

</html>