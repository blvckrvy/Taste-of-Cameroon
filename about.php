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

    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="CSS/main.css">

    <title>Taste of Cameroon | About Us</title>
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
            <li><a href="menu.php">MENU</a>
            <li><a href="book.php">BOOK NOW</a>
            <li><a href="order.php">ORDER ONLINE</a>
            <li><a href="about.php" style="color: #FFF7E0">ABOUT US</a>
            <li><a href="contact.php">CONTACT US</a>
        </ul>
    </nav>

    <main>
        <section class="about-container">
            <div class="heading">
                <h1><i>Everything about us !</i></h1>
            </div>

            <div class="paragraph1">
                <h2>Our Story</h2>
                <p>Taste of Cameroon was founded with a passion for sharing the rich flavours and culinary traditions of Cameroon. From humble beginnings as a family-run kitchen, we have grown into a beloved restaurant where every dish tells a story of home, heritage, and hospitality. Our recipes are inspired by generations of authentic Cameroonian cooking, bringing together bold spices, fresh ingredients, and the warmth of Cameroonian hospitality.</p>
            </div>

            <div class="paragraph2">
                <h2>Our Mission & Values</h2>
                <p>At Taste of Cameroon, our mission is to bring people together through the power of food. We strive to:</p>
                <ul>
                    <li>Celebrate Authenticity</li>
                    <li>Use Fresh Ingredients</li>
                    <li>Create a Welcoming Atmosphere</li>
                    <li>Support Our Community</li>
                </ul>
            </div>

            <div class="paragraph3">
                <h2>Meet Our Chefs & Team</h2>
                <div class="team-section">
                    <img src="Images/chef.png" alt="Chef Gregory CHIMI">
                    <div>
                        <p>Our kitchen is led by <b>Chef Gregory CHIMI</b>, a culinary expert with years of experience in African cuisine. Born and raised in Cameroon, he developed over the years a deep-rooted love for Cameroonian flavors. Chef Gregory combines tradition with innovation, ensuring every plate is a true representation of our culture.</p>
                        <p style="margin-top: 20px;">Behind the scenes, our passionate team of cooks, waiters, and staff work together to create a memorable dining experience for you. Do not hesitate to throw in a tip or two on your way out.</p>
                    </div>
                </div>
            </div>

            <div class="paragraph4">
                <h2>Awards & Recognitions</h2>
                <div class="awards-grid">
                    <div class="award-card">🏅 Best African Restaurant Award - 2020</div>
                    <div class="award-card">🏅 Top 10 Must-Try Restaurants in Randburg - 2021</div>
                    <div class="award-card">🏅 Excellence in Traditional Cuisine - 2020</div>
                </div>
                <p>Whether you're here to relive the taste of home or to experience Cameroonian cuisine for the first time, we welcome you with open arms.</p>
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
</body>

</html>