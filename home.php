<?php

include 'connect.php';
session_start();

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
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
    <title>NutriConnect</title>
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      
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
          <li><a href="Home.html">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="Treatment1.html">Treatments</a></li>
          <li><a href="#">Donate</a></li>
          <li><a href="#">Order</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#"><i class="fa-solid fa-circle-user fa-2x"></i></a></li>
        </ul>
      </div>
    </nav>

    <!-- home -->
    <section id="home">
      <h2>Empowering Kids Through Nutrition</h2>
      <p>
        Help us break the cycle of hunger and provide essential nutrition to
        kids in rural Sri Lanka.
        By contributing, you're not just feeding a child; you're fueling their
        education, health, and future success.
        Together, we can give them the strength to focus on learning and the
        hope for a brighter tomorrow.
      </p>

      <div class="home-btn">
        <a href="#">Donate Now</a>
      </div>
    </section>

    <!--Malnutrition -->
    <section id="malnutrition">
      <h1>What is Malnutrition?</h1>
      <div class="mal-box">
        <p>"Malnutrition refers to deficiencies or excesses in nutrient intake, 
          imbalance of essential nutrients or impaired nutrient utilization. 
          The double burden of malnutrition consists of both undernutrition and overweight and obesity, 
          as well as diet-related noncommunicable diseases. Undernutrition manifests in four broad forms: 
          wasting, stunting, underweight, and micronutrient deficiencies.</p>
          <p>
          Wasting is defined as low weight-for-height. It often indicates recent and severe weight loss, 
          although it can also persist for a long time. It usually occurs when a person has not had food of 
          adequate quality and quantity and/or they have had frequent or prolonged illnesses. Wasting in 
          children is associated with a higher risk of death if not treated properly. Stunting is defined as 
          low height-for-age. It is the result of chronic or recurrent undernutrition, usually associated with 
          poverty, poor maternal health and nutrition, frequent illness and/or inappropriate feeding and care 
          in early life. Stunting prevents children from reaching their physical and cognitive potential. 
          Underweight is defined as low weight-for-age. A child who is underweight may be stunted, wasted or 
          both.
          </p>
          <p>Micronutrient deficiencies are a lack of vitamins and minerals that are essential 
          for body functions such as producing enzymes, hormones and other substances needed for growth and 
          development."</p>

        <img src="images/who.png" alt="who">
      </div>
    </section>

    <!--Card section-->
<section class="malnutri-card">
  <h1>Malnutrition Comes In Many Forms</h1>
    <div class="cards">
      <div class="wrapper">
        <div class="card-area">
          <div class="card">
            <img src="images/wasting.jpg" alt="wasting"/>
            <div class="overlay">
              <h3>Wasting</h3>
              <p>
                Wasting, or acute malnutrition, is when one is too thin for
                their height.
                It can be a sudden change or one that occurs gradually but
                persistently.
                It can be treated, but moderate and severe cases carry an
                increased risk of death.
              </p>
              <a href="#">Laern More</a>
            </div>
          </div>

          <div class="card">
            <img src="images/stuning.jpg" alt="stunting"/>
            <div class="overlay">
              <h3>Stunting</h3>
              <p class>
                Stunting, or chronic malnutrition, refers to children who are
                too short for their age.
                It can occur when children do not have access to diverse
                nutrients, drink dirty or contaminated water, or lack proper
                healthcare.
                Stunted growth in children can cause life-long physical and
                cognitive damage.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>

          <div class="card">
            <img src="images/overweight.jpeg" alt="overweight"/>
            <div class="overlay">
              <h3>Overweight</h3>
              <p>
                Overweight means being too heavy for one’s height. If one is
                overweight,
                they are at greater risk of diet-related, non-communicable
                diseases later in life.
              </p>
              <a href="#" >Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="causes">
  <div class="heading">
      <h1>Causes of <span>Malnurition</span></h1>
  </div>

  <div class="causes-mal">
      <div class="des">
          <img src="images/cause1.jpg" alt="">
          <div class="content-part">
              <h3> <i class="fa-solid fa-circle-check"></i> Poverty </h3>
              <p>Without the proper means to afford food rich in nutrients or any food at all, people often suffer. According to the World Data Lab, 35% of Africans live in extreme poverty, while the World Bank estimates that more than 48 to 59 million people in South Asia became or remained poor because of the COVID-19 pandemic.</p>
              <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
          </div>
      </div>
      <div class="des">
          <img src="images/cause2.jpg" alt="">
          <div class="content-part">
              <h3> <i class="fa-solid fa-circle-check"></i> Inequality </h3>
              <p>In any location, poverty and an unequal distribution of resources can seriously undermine one’s ability to consume a well-balanced diet. Women are disproportionately affected by hunger; in nearly two-thirds of the world’s countries, women are more likely than men to suffer from hunger and food insecurity.</p>
              <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
          </div>
      </div>
      <div class="des">
          <img src="images/cause3.jpg" alt="">
          <div class="content-part">
              <h3> <i class="fa-solid fa-circle-check"></i> Disease </h3>
              <p>Children who suffer from diseases or illnesses such as malaria, cholera or pneumonia are more susceptible to malnutrition. The combination of disease or illness and malnutrition weakens the metabolism, creating a vicious cycle of infection and undernourishment. The results can be deadly.</p>
              <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
          </div>
      </div>
      <div class="des">
          <img src="images/cause4.jpg" alt="">
          <div class="content-part">
              <h3> <i class="fa-solid fa-circle-check"></i> Conflict </h3>
              <p>Violent conflicts can drastically compromise food security. According to the 2021 Global Report of Food Crises by the Food Security Information Network, conflict was the primary driver of food insecurity, with 99.1 million people in 23 countries hungry due to armed violence and insecurity in 2020, a sharp increase of more than 22 million people from 2019.</p>
              <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
          </div>
      </div>
      <div class="des">
          <img src="images/cause5.jpg" alt="">
          <div class="content-part">
              <h3> <i class="fa-solid fa-circle-check"></i> Climate Change </h3>
              <p>Climate change is an undeniable fact. If we cannot divert from the expected 2.7°C of warming, there will be devasting global consequences. By 2040, major heat waves will affect more than 3.9 billion people and 700 million more will be exposed to drought risk, while crop yields are expected to drop by 50%.</p>
              <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
          </div>
      </div>
      <div class="des">
          <img src="images/cause6.jpg" alt="">
          <div class="content-part">
              <h3> <i class="fa-solid fa-circle-check"></i> Lack of Clean Drinking Water </h3>
              <p>Lack of potable water, poor sanitation, and dangerous hygiene practices increase vulnerability to infectious and water-borne diseases, which are direct causes of acute malnutrition.</p>
              <a href="https://www.actionagainsthunger.org/story/malnutrition-symptoms-treatment-key-stats/" class="btn">More Info</a>
          </div>
      </div>
  </div>
</section>

<section class="about" id="about">
  <h1 class="heading"> Why Choose <span>Us?</span> </h1>
  <p class="about-p">NutriConnect is a donation website to help for kids who are suffering from malnutrition 
    in rural area of Sri Lanka. In here user will be able to place a food order and check lates 
    update of food categories and experienced fastest delivery service as far as using this website and
     also will be able to donate food or money.</p>

  <div class="icons-container">
      <div class="icons">
          <i class="fas fa-shipping-fast"></i>
          <h3>Fast Delivery</h3>
          <p>We ensure speedy and efficient delivery of nutritious meals to children in need.</p>
      </div>
      <div class="icons">
          <i class="fas fa-dollar-sign"></i>
          <h3>Secure Payments</h3>
          <p>All donations and transactions are securely processed with trusted payment gateways.</p>
      </div>
      <div class="icons">
          <i class="fas fa-utensils"></i>
          <h3>Nutritious Meals</h3>
          <p>We provide healthy, well-balanced meals to fight malnutrition in rural schools.</p>
      </div>
      <div class="icons">
          <i class="fas fa-hand-holding-heart"></i>
          <h3>Trusted Donations</h3>
          <p>Every contribution goes directly to helping underprivileged children in Sri Lanka.</p>
      </div>
      <div class="icons">
          <i class="fas fa-headset"></i>
          <h3>24/7 Support</h3>
          <p>Our team is available round the clock to assist with donations and queries.</p>
      </div>
  </div>
</section>

<!-- Latest News Section -->
<!-- Latest News Section -->
<section class="latest-news">
  <h2>Latest News</h2>
  <div class="news-slider">
      <div class="news-wrapper">
          <div class="news-slide active">
              <img src="images/news1.jpg" alt="News 1">
              <div class="news-content">
                  <h3>Aging population and child malnutrition pose challenges for Sri Lanka’s economy: Expert</h3>
                  <p>“For instance you know we are an aging population in Sri Lanka and more than half our population will be over 60 years old very very soon...”</p>
                  <a href="https://www.adaderana.lk/news.php?nid=106166" class="read-more">Read More</a>
              </div>
          </div>
          <div class="news-slide">
              <img src="images/news2.jpg" alt="News 2">
              <div class="news-content">
                  <h3>One-third of Sri Lanka’s children suffering from malnutrition: Committee report</h3>
                  <p>Colombo, September 4 (Daily Mirror) - A report presented to Parliament today revealed that one-third of Sri Lanka's children are suffering from malnutrition. 
                    The committee was appointed to investigate into the issue of malnutrition in the country. The report was presented to the House by committee member Rohini Kaviratne today.</p>
                  <a href="https://www.dailymirror.lk/breaking-news/One-third-of-Sri-Lankas-children-suffering-from-malnutrition-Committee-report/108-290988" class="read-more">Read More</a>
              </div>
          </div>
          <div class="news-slide">
              <img src="images/news3.jpg" alt="News 3">
              <div class="news-content">
                  <h3>Select Committee report on child malnutrition presented to Parliament</h3>
                  <p>The report of the Parliament Select Committee appointed to look into the issue of child malnutrition in 
                    Sri Lanka was presented to the Parliament recently (Sep 04), identifying an increase in underweight 
                    and stunting among infants and children up to two years of age in 2023 compared to 2022.</p>
                  <a href="https://www.newswire.lk/2024/09/09/select-committee-report-on-child-malnutrition-presented-to-parliament/" class="read-more">Read More</a>
              </div>
          </div>
      </div>

      <!-- Navigation Buttons -->
      <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
      <button class="next" onclick="changeSlide(1)">&#10095;</button>
  </div>

  <!-- Slide Dots -->
  <div class="dots-container">
      <span class="dot active" onclick="currentSlide(0)"></span>
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
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

<script src="Script.js"></script>

</body>
</html>