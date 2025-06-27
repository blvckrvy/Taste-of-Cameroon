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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="CSS/book.css">
    <link rel="stylesheet" href="CSS/booking-success.css">
    <link rel="stylesheet" href="CSS/main.css">

    <title>Taste of Cameroon | Book Now</title>
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
            <li><a href="book.php" style="color: #FFF7E0">BOOK NOW</a>
            <li><a href="order.php">ORDER ONLINE</a>
            <li><a href="about.php">ABOUT US</a>
            <li><a href="contact.php">CONTACT US</a>
        </ul>
    </nav>

    <main>
        <section class="book-container">
            <div class="desc">
                <h1><i>Welcome to Cameroon!</i></h1>
                <p>Experience the rich and vibrant flavors of Cameroon in every dish we serve.
                    Whether you're dining alone, with a partner, or with friends and family, we're ready to make your visit unforgettable.
                    Simply fill the form below to reserve your table and get ready to savor the authentic taste of Cameroon.</p>

                <!-- booking form -->
                <?php
                include("HTML/booking-form.html")
                ?>
            </div>

            <!-- success message -->
            <?php
            include("HTML/booking-success.html")
            ?>
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

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/booking.js"></script>
</body>

</html>