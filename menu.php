<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=8">
    <meta name="description" content="restaurant website">
    <meta name="author" content="blvckrvy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="x-icon" href="Images/logo.png" />

    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="stylesheet" href="CSS/main.css">

    <title>Taste of Cameroon | Menu</title>
</head>

<body>
    <!-- header -->
    <?php
    include("HTML/header.html");
    ?>

    <!-- media queries menu -->
    <?php
    include("HTML/media-navbar.html");
    ?>

    <!-- Desktop Nav -->
    <nav>
        <ul>
            <li><a href="menu.php" style="color: #FFF7E0">MENU</a></li>
            <li><a href="book.php">BOOK NOW</a></li>
            <li><a href="order.php">ORDER ONLINE</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
        </ul>
    </nav>

    <main>
        <section class="menu-container">
            <div class="desc">
                <h1><i>Discover the Rich Flavors of Cameroon</i></h1>
                <p>At Taste of Cameroon, we bring the vibrant and diverse flavors of Cameroon straight to your table.
                    Our menu is a celebration of traditional recipes passed down through generations — rich in spices, culture, and heart.
                    Whether you're craving a hearty Ndolé, a spicy Suya, or our signature Taro sauce jaune, every dish is prepared with fresh ingredients and deep-rooted love for Cameroonian cuisine.</p>
                <p>Explore our menu and take your taste buds on a delicious journey across West Africa.</p>
            </div>

            <div class="menu-plan">
                <h2><i>Bon appétit !</i></h2>
                <div class="button-grid">
                    <div class="button-card"><a href="main-dishes.php"><button>Main Dishes</button></a></div>
                    <div class="button-card"><a href="soups.php"><button>Soups & Stews</button></a></div>
                    <div class="button-card"><a href="sides.php"><button>Sides & Accompaniments</button></a></div>
                    <div class="button-card"><a href="vegetarian.php"><button>Vegetarian Options</button></a></div>
                    <div class="button-card"><a href="street.php"><button>Snacks & Street Foods</button></a></div>
                    <div class="button-card"><a href="drinks.php"><button>Drinks & Beverages</button></a></div>
                </div>
            </div>
        </section>

        <section class="carousel">
            <div class="carousel-track">
                <div class="carousel-slide">
                    <img src="Images/main/taro sauce jaune.jpg" alt="riz sauce tomate">
                    <p>Taro Sauce Jaune</p>
                </div>
                <div class="carousel-slide">
                    <img src="Images/street/beignets koki.jpg" alt="beignets koki">
                    <p>Beignets Koki</p>
                </div>
                <div class="carousel-slide">
                    <img src="Images/soups/pepe soupe.jpg" alt="legume saute">
                    <p>Pepper Soupe</p>
                </div>
                <div class="carousel-slide">
                    <img src="Images/main/poulet dg.jpg" alt="corn-chaff">
                    <p>Poulet DG</p>
                </div>
                <div class="carousel-slide">
                    <img src="Images/main/riz sauce tomate.jpg" alt="soya">
                    <p>Riz Sauce Tomate</p>
                </div>
            </div>
            <button class="carousel-btn prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="carousel-btn next"><i class="fa-solid fa-arrow-right"></i></button>
        </section>

        <!-- add section for reviews here -->
        <section class="reviews">
            <h3>What Our Customers Say</h3>
            <div class="reviews-grid">
                <div class="reviews-card">
                    <p>"Absolutely incredible! The flavors transported me straight to the heart of Cameroon. The Poulet DG was perfectly seasoned and the atmosphere was warm and welcoming. I can’t wait to visit again!"</p>
                    <h4>~ Emily R. ★★★★★</h4>
                </div>
                <div class="reviews-card">
                    <p>"A delightful experience! The Ndolé was rich and tasty, and the staff made me feel like family. I wish the portion size was a little bigger, but overall, I loved it!"</p>
                    <h4>~ James K. ★★★★☆</h4>
                </div>
                <div class="reviews-card">
                    <p>"Taste of Cameroon is a hidden gem. The authenticity of the dishes blew me away — especially the grilled fish and plantains. You can really tell everything is prepared with love."</p>
                    <h4>~ Lebo M. ★★★★★</h4>
                </div>
                <div class="reviews-card">
                    <p>"First time trying Cameroonian food and I was not disappointed! The spice, the flavors, the presentation — everything was top notch. Highly recommended for anyone wanting a unique culinary journey."</p>
                    <h4>~ Samantha D. ★★★★★</h4>
                </div>
                <div class="reviews-card">
                    <p>"Great vibe and even better food. The Suya was smoky and flavorful, and the ginger juice was the perfect refreshing touch. Service was a bit slow during peak hours but worth the wait!"</p>
                    <h4>~ Thabo N. ★★★★☆</h4>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php
    include("HTML/footer.html");
    ?>

    <!-- warning! -->
    <?php
    include("HTML/portrait-lock.html");
    ?>
    <script src="JS/carousel.js"></script>
</body>

</html>