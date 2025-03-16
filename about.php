<?php


include 'connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriConnect</title>

    <!--link css file-->
    <title>NutriConnect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/about.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <!--navigation bar -->
    <nav class="home-nav">
        <div class="nav-logo">
            <img src="images/logo1.png" alt="NutriConnect_logo">
            <h3>NutriConnect</h3>
        </div>
        <div class="navigation">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="treatment.php">Treatments</a></li>
                <li><a href="donation.php">Food Donate</a></li>
                <li><a href="money.php">Money Donate</a></li>
                <li><a href="menu.php">Order</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="profile.php"><i class="fa-solid fa-circle-user fa-2x"></i></a></li>
            </ul>
        </div>
    </nav>

    <!-- home -->
    <section id="home">
        <h2>About Us</h2>
        <p>
            Every child deserves the chance to grow, learn, and dream without the burden of hunger.
            At NutriConnect, we believe that a nutritious meal is more than just food—it’s a foundation
            for a brighter future. Through your generosity, we bridge the gap between hunger and hope,
            ensuring that children in rural Sri Lanka have the nourishment they need to thrive in school
            and beyond.
        </p>
    </section>

    <!-- About Us -->
    <div class="about-heading">
        <h1 class="about-head"> Who We <span>Are?</span> </h1>
    </div>
    <section class="about-section">
        <div class="about-left">
            <div class="about-box light">
                <h3>Our Vision</h3>
                <p>At NutriConnect, our mission is to combat malnutrition among rural schoolchildren
                    in Sri Lanka by providing a simple and effective platform for food and monetary donations.
                    We strive to ensure that every child has access to nutritious meals while promoting
                    community-driven support and nutrition education.</p>
            </div>
            <div class="about-box light">
                <h3>Our Mission</h3>
                <p>We envision a future where no child in Sri Lanka suffers from malnutrition due to
                    poverty or lack of access to healthy food. Through technology, collaboration, and
                    education, we aim to build a sustainable support system that empowers communities
                    and fosters a healthier generation.</p>
            </div>
        </div>

        <div class="about-right">
            <div class="about-content">
                <p>We connect compassionate donors with children in need,
                    providing them with nutritious meals that fuel their education, health, and
                    future success. Every meal we serve is a step towards breaking the cycle of
                    poverty and giving children the opportunity to learn, grow, and dream without
                    limitations.With the support of generous individuals and organizations, we transform hunger into
                    hope, one meal at a time.</p>
                <a href="contact.html" class="btn">Contact Us</a>
            </div>
        </div>
        </div>
    </section>

    <!--Meet Our Team-->
    <section class="our-team">
        <div class="wrapper">

            <div class="title">
                <h1 class="title-head"> Meet Our <span>Team</span> </h1>
            </div>

            <div class="card_Container">

                <div class="card">

                    <div class="imbBx">
                        <img src="./images/Heshan.JPG" alt="Heshan">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>heshan Siriwardhane <br><span>Software Engineering Undergraduate</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 1">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">

                    <div class="imbBx">
                        <img src="./images/vishadi.jpeg" alt="vishadi">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Vishadi Ranasinghe <br><span>Software Engineering Undergraduate</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 1">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">

                    <div class="imbBx">
                        <img src="./images/Mayumi.jpeg" alt="Mayumi">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Mayumi Shehara <br><span>Software Engineering Undergraduate</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 1">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="card">

                    <div class="imbBx">
                        <img src="./images/Hiruni.jpeg" alt="Hiruni">
                    </div>

                    <div class="content">
                        <div class="contentBx">
                            <h3>Hiruni Lanka <br><span>Software Engineering Undergraduate</span></h3>
                        </div>
                        <ul class="sci">
                            <li style="--i: 1">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li style="--i: 2">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li style="--i: 3">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Testimonials-->

    <section class="review" id="review">

        <h1 class="heading"> Customer <span>Reviews</span> </h1>

        <div class="swiper mySwiper review-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide box">
                    <img src="./images/t2.jpg" alt="">
                    <p>So happy with this.. received really quick. Thanks so much.</p>
                    <h3>Amila Bandara</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./images/t1.jpg" alt="">
                    <p> Fast delivery. Looks awesome. Would buy from seller again.</p>
                    <h3>Natasha Pathirana</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./images/t3.jpg" alt="">
                    <p>Great description of item. Like new. Very prompt as well.</p>
                    <h3>Naveen Perera</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./images/t4.png" alt="">
                    <p>As described, good quality, arrived quickly, recommended seller.</p>
                    <h3>Amali Gunasekara</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
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
    <script src="Script.js"></script>

</body>

</html>