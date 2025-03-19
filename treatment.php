<?php

include 'connect.php';

session_start();

// if (!isset($user_id)) {
//     header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriConnect -Contact</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/4801a7dc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/treatment.css">

</head>

<body>

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
                    <li><a href="Treatment.php">Treatments</a></li>
                    <li><a href="donation.php">Food Donate</a></li>
                    <li><a href="money.php">Money Donate</a></li>
                    <li><a href="menu.php">Order</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="profile.php"><i class="fa-solid fa-circle-user fa-2x"></i></a></li>
                </ul>
            </div>
        </nav>


        <!-- home -->
        <section id="home">
            <div class="treat">
                <img src="images/treat2.png" alt="treatment">
                <div class="detail">
                    <h2>Treatments</h2>
                    <p>Every child deserves a healthy future. Explore trusted solutions, expert insights,
                        and essential treatments to combat child malnutrition. Our mission is to provide
                        reliable information on proper nutrition, medical interventions, and sustainable
                        solutions to ensure no child goes hungry. From identifying early signs of malnutrition
                        to offering practical dietary recommendations, we empower caregivers and communities with
                        the tools to make a lasting impact. Together, we can fight malnutrition—one meal, one solution,
                        and one child at a time</p>
                </div>
            </div>
        </section>

        <section class="causes">
            <div class="heading">
                <h1>Nutritional Problems and <span> Solutions</span></h1>
            </div>

            <div class="causes-mal">
                <div class="des">
                    <img src="images/iron.jpg" alt="">
                    <div class="content-part">
                        <h3> Iron Deficiency </h3>
                        <p> Iron deficiency is one of the most prevalent nutrient deficiencies worldwide, leading to
                            anemia, fatigue, and weakened immunity</p>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> Consume iron-rich foods such as lean meats,
                                beans, lentils, and fortified cereals.</li>
                            <li><i class="fa-solid fa-circle-check"></i> Enhance iron absorption by pairing iron-rich
                                foods with vitamin C sources like citrus fruits</li>
                            <li><i class="fa-solid fa-circle-check"></i> Limit intake of calcium-rich foods during
                                iron-rich meals, as calcium can inhibit iron absorption</li>
                        </ul>

                        <a href="https://www.healthline.com/nutrition/7-common-nutrient-deficiencies?" class="btn">More
                            Info</a>
                    </div>
                </div>

                <div class="des">
                    <img src="images/Vitamin-D.jpg" alt="">
                    <div class="content-part">
                        <h3> Vitamin D Deficiency </h3>
                        <p> Vitamin D deficiency can result in bone pain, muscle weakness, and increased risk of
                            fractures </p>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> Spend time outdoors to allow your skin to
                                synthesize vitamin D from sunlight </li>
                            <li><i class="fa-solid fa-circle-check"></i> Include dietary sources of vitamin D such as
                                fatty fish, fortified dairy products, and egg yolks </li>
                            <li><i class="fa-solid fa-circle-check"></i> Consider vitamin D supplements if necessary,
                                after consulting with a healthcare provider </li>
                        </ul>

                        <a href="https://www.healthline.com/nutrition/7-common-nutrient-deficiencies?" class="btn">More
                            Info</a>
                    </div>
                </div>

                <div class="des">
                    <img src="images/loss-of-appetite.jpg" alt="">
                    <div class="content-part">
                        <h3> Decreased Appetite </h3>
                        <p> A decreased appetite can lead to inadequate food intake, which may result in malnutrition,
                            weight loss, and weakened immunity </p>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> Try to eat more protein and fat, and less
                                simple sugars</li>
                            <li><i class="fa-solid fa-circle-check"></i> Walk or participate in light activity to
                                stimulate your appetite </li>
                            <li><i class="fa-solid fa-circle-check"></i> Eat smaller meals and snacks more frequently.
                                Eating six or seven or eight times a day might be more easily tolerated than eating the
                                same amount of food in three meals.</li>
                            <li><i class="fa-solid fa-circle-check"></i> Avoid non-nutritious beverages such as black
                                coffee and tea; instead choose milk and juices </li>

                            <a href="https://my.clevelandclinic.org/health/diseases/22987-malnutrition" class="btn">More
                                Info</a>
                    </div>
                </div>

                <div class="des">
                    <img src="images/constipation.jpg" alt="">
                    <div class="content-part">
                        <h3> Constipation </h3>
                        <p> Constipation is characterized by infrequent or difficult bowel movements, often due to
                            inadequate fiber intake </p>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> Increase fiber consumption by eating more
                                fruits, vegetables, whole grains, and legumes </li>
                            <li><i class="fa-solid fa-circle-check"></i> Stay hydrated by drinking plenty of water
                                throughout the day </li>
                            <li><i class="fa-solid fa-circle-check"></i> Engage in regular physical activity to
                                stimulate bowel movements </li>

                            <a href="https://my.clevelandclinic.org/health/diseases/22987-malnutrition" class="btn">More
                                Info</a>
                    </div>
                </div>

                <div class="des">
                    <img src="images/vitamin B.jpg" alt="">
                    <div class="content-part">
                        <h3> Vitamin B12 Deficiency </h3>
                        <p> A lack of vitamin B12 can cause anemia, fatigue, and neurological issues </p>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> Incorporate animal-based foods like meat,
                                dairy, and eggs into your diet </li>
                            <li><i class="fa-solid fa-circle-check"></i> For vegetarians and vegans, consume fortified
                                foods or take B12 supplements </li>
                            <li><i class="fa-solid fa-circle-check"></i> Regularly monitor B12 levels, especially if you
                                have dietary restrictions or absorption issues </li>

                            <a href="https://www.healthline.com/nutrition/7-common-nutrient-deficiencies?"
                                class="btn">More Info</a>
                    </div>
                </div>

                <div class="des">
                    <img src="images/diarrhea.jpeg" alt="">
                    <div class="content-part">
                        <h3> Diarrhea </h3>
                        <p>Diarrhea can lead to dehydration, nutrient loss, and overall weakness due to the frequent
                            loss of fluids and electrolytes </p>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> Drink eight or more cups of liquids per day
                            </li>
                            <li><i class="fa-solid fa-circle-check"></i> Drink a variety of beverages, such as water,
                                tea, iced tea, lemonade, fruit-flavored drinks, vegetable juice, milk, cream soups, or
                                sports drinks with electrolytes. </li>
                            <li><i class="fa-solid fa-circle-check"></i> Use less sugar and fat. Limiting sugar and fat
                                might decrease the amount of water in the intestine and reduce the number of episodes of
                                diarrhea. </li>

                            <a href="https://www.healthline.com/nutrition/7-common-nutrient-deficiencies?"
                                class="btn">More Info</a>
                    </div>
                </div>


            </div>
        </section>


        <!-- footer -->
        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Follow Us On :</h3>
                    <div class="share">
                        <a href="https://www.facebook.com/" class="fab
                                fa-facebook-f"></a>
                        <a href="https://twitter.com/login" class="fab
                                fa-twitter"></a>
                        <a href="https://www.instagram.com/accounts/login/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/login" class="fab
                                fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#" class="links"> <i class="fas fa-phone"></i>
                        +94 77 656 6326</a>
                    <a href="#" class="links"> <i class="fas fa-phone"></i>
                        +94 77 274 5029 </a>
                    <a href="#" class="links"> <i class="fas fa-envelope"></i></a>
                    <a href="mailto:vishadisr@gmail.com" class="links">
                        vishadisr@gmail.com </a>
                    <a href="mailto:mayumishehara2601@gmail.com" class="links"> mayumishehara2601@gmail.com </a>
                    <a href="mailto:hirunilanka@gmail.com" class="links">
                        hirunilanka@gmail.com </a>
                    <a href="mailto:heshansiriwardhana@gmail.com" class="links"> heshansiriwardhane@gmail.com </a>
                    <a href="#" class="links"> <i class="fas
                                fa-map-marker-alt"></i> Colombo, Sri Lanka</a>
                </div>

                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php" class="links"> <i class="fas
                                fa-arrow-right"></i> Home </a>
                    <a href="donation.php" class="links"> <i class="fas
                                fa-arrow-right"></i> Donation </a>
                    <a href="menu.php" class="links"> <i class="fas
                                fa-arrow-right"></i> Order </a>
                    <a href="treatment.php" class="links"> <i class="fas
                                fa-arrow-right"></i> Treatment </a>
                    <a href="contact.php" class="links"> <i class="fas
                                fa-arrow-right"></i> Contact Us </a>
                </div>

                <div class="box">
                    <h3>Newsletter</h3>
                    <p>Subscribe for latest updates</p>
                    <input type="email" placeholder="Your Email" class="email">
                    <input type="submit" value="Subscribe" class="btn">
                    <img src="images/payment.png" class="payment-img" alt="Payment Methods">
                </div>

            </div>

            <div class="credit">&copy;2025 Created by <span> Team Four
                    Fronts </span> | All Rights Reserved </div>

        </section>


        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
        <script>


            const constraints = {
                name: {
                    presence: { allowEmpty: false }
                },
                email: {
                    presence: { allowEmpty: false },
                    email: true
                },
                phone: {
                    presence: { allowEmpty: false }
                },
                country: {
                    presence: { allowEmpty: false }
                },
                msg: {
                    presence: { allowEmpty: false }
                }
            };

            const form = document.getElementById('contact-form');
            form.addEventListener('submit', function (event) {

                const formValues = {
                    name: form.elements.last_name.value,
                    email: form.elements.email.value,
                    phone: form.elements.phone.value,
                    country: form.elements.country.value,
                    msg: form.elements.subject.value
                };


                const errors = validate(formValues, constraints);
                if (errors) {
                    event.preventDefault();
                    const errorMessage = Object
                        .values(errors)
                        .map(function (fieldValues) {
                            return fieldValues.join(', ')
                        })
                        .join("\n");

                    alert(errorMessage);
                }
            }, false);

        </script>
    </body>

</html>