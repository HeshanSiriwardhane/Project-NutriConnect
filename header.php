<div class="headers">
    <a href="home.php" class="logo">
        <div class="lo">
            <img src="images/logo1.png" style="width: 60px; height:60px">
        </div>NutriConnect
    </a>

    <nav class="navbar">
        <?php
        $select_cart_number = mysqli_query($conn, "SELECT * FROM `d_cart` WHERE user_id = '$user_id'") or die('query failed');
        $cart_rows_number = mysqli_num_rows($select_cart_number);
        ?>

        <a class="active" href="home.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="treatment.php">Treatment</a>
        <a href="donation.php">Food Donate</a>
        <a href="money.php">Money Donate</a>
        <a href="menu.php">Order</a>
        <a href="contact.php">Contact Us</a>
        <!-- <a href="donate_cart.php">Cart<span>(<?php echo $cart_rows_number; ?>)</span></a> -->

    </nav>

    <div class="icons">

        <a href="donate_cart.php" class="fa-solid fa-cart-shopping"
            id="search-icon"><span>(<?php echo $cart_rows_number; ?>)</span></a>
        <a href="profile.php" class="fa-solid fa-user"></a>
    </div>

</div>


</section>

</div>