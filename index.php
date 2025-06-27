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

    <link rel="stylesheet" href="CSS/index.css">

    <title>Taste of Cameroon</title>
</head>

<body>
    <div class="hamburger" onclick="toggleSidebar()">
        <i class="fa fa-bars collapse-icon"></i>
    </div>

    <div class="content">
        <img src="Images/logo_png.png" alt="Taste of Cameroon logo" class="logo">
        <section class="carousel">
            <div class="carousel-track">
                <div class="carousel-slide">
                    <img src="Images/street/BH.jpg" alt="Beignets Haricots">
                </div>
                <div class="carousel-slide">
                    <img src="Images/sides/plantain frits.jpg" alt="plantain frits">
                </div>
                <div class="carousel-slide">
                    <img src="Images/main/ndole.jpg" alt="riz sauce tomate">
                </div>
            </div>
            <div class="carousel-dots"></div>
        </section>
    </div>

    <div class="sidebar">
        <div class="close-btn" onclick="toggleSidebar()">
            <i class="fas fa-times"></i>
        </div>
        <div>
            <a href="menu.php">Menu</a>
            <a href="book.php">Book Now</a>
            <a href="order.php">Order Online</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/8c5181e141.js" crossorigin="anonymous"></script>
    <script src="JS/index_carousel.js"></script>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const hamburger = document.querySelector('.hamburger');

            sidebar.classList.toggle('active');
            hamburger.classList.toggle('hidden');
        }
    </script>

    <!-- warning! -->
    <?php
    include("HTML/portrait-lock.html");
    ?>
</body>

</html>