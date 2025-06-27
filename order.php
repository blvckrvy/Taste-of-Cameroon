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

    <link rel="stylesheet" href="CSS/order.css">
    <link rel="stylesheet" href="CSS/main.css">

    <title>Taste of Cameroon | Order Online</title>
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
            <li><a href="order.php" style="color: #FFF7E0">ORDER ONLINE</a>
            <li><a href="about.php">ABOUT US</a>
            <li><a href="contact.php">CONTACT US</a>
        </ul>
    </nav>

    <main>
        <section class="main-container">
            <div class="content-desc">
                <h1><i>Order the Taste of Cameroon</i></h1>
                <h2>Our Taste of Cameroon restaurant offers Takeaways & Deliveries</h2>
                <p>You may place deliveries orders via our trusted 3rd parties.</p>
            </div>

            <div class="buttons">
                <div>
                    <a href="https://www.mrd.com/" target="_blank" rel="noopener noreferrer"><button>Order via MrD Food</button></a>
                </div>
                <div>
                    <a href="http://ubereats.com/za" target="_blank" rel="noopener noreferrer"><button>Order via UberEats</button></a>
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
    <script src="https://kit.fontawesome.com/8c5181e141.js" crossorigin="anonymous"></script>
</body>

</html>