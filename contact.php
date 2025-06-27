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

    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/query-success.css">
    <link rel="stylesheet" href="CSS/main.css">

    <title>Taste of Cameroon | Contact Us</title>
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
            <li><a href="about.php">ABOUT US</a>
            <li><a href="contact.php" style="color: #FFF7E0">CONTACT US</a>
        </ul>
    </nav>

    <main>
        <section class="contact-container">
            <div class="heading">
                <h1><i>Get in touch with us</i></h1>
            </div>

            <div class="method1">
                <p>We'd love to hear from you. If you have any queries, comments or suggestions, do not hesitate to get in touch with us via your preferred method of contact listed below</p>
                <div id="contact">
                    <ul>
                        <li><i class="fa-solid fa-phone"></i> : <a>(078) 901-2345</a></li>
                        <li><i class="fa-solid fa-envelope"></i> : <a href="mailto:TasteofCameroon@gmail.com">TasteofCameroon@gmail.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="method2">
                <p>For booking or store related queries, please contact the restaurant using the form below.</p>
                <form class="contact-form" method="POST" enctype="multipart/form-data">
                    <div class="name-container">
                        <div class="input-container">
                            <label>Name</label>
                            <div>
                                <input type="text" class="firstName input-product" name="fname" placeholder="First Name" required />
                                <input type="text" class="lastName input-product" name="lname" placeholder="Last Name" required />
                            </div>
                        </div>
                    </div>

                    <div class="info-container">
                        <div class="input-container">
                            <label>Info</label>
                            <div>
                                <input type="email" class="email input-product" name="email" placeholder="Email" required />
                                <input type="tel" class="phone input-product" name="phone" placeholder="Phone" required />
                            </div>
                        </div>
                    </div>

                    <div class="message-container">
                        <div class="input-container">
                            <label>Your message</label>
                            <div>
                                <textarea class="description desc-product" name="desc" placeholder="Enter your query here..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="join-team">
                        <div class="checkbox-container">
                            <input type="checkbox" class="checkbox checkbox-product" />
                            <label>Click here if you would like to join the team 😉</label>
                        </div>
                    </div>

                    <!-- remember to make the server-side too -->
                    <div class="captcha">
                        <div class="g-recaptcha" data-sitekey="6Ld-IRMrAAAAAMN_FHPK7-dQ-q19r45PhuMY02MP"></div>
                    </div>

                    <button type="submit" class="contact-button">Send Message</button>
                </form>

                <!-- success message -->
                <?php
                include("HTML/query-success.html")
                ?>
            </div>

            <div class="branches">
                <h2>Our Branches</h2>
                <p>Find below the address of our current restaurant branches, their contact numbers and their operating hours. </p>

                <div id="branch-image">
                    <div id="branch-shadow">
                        <div class="branch">
                            <strong style="font-size:18px">Randburg Branch</strong><br>
                            123 Main Street, Johannesburg, 2001<br>
                            📞 (011) 123-4567<br>
                            ⏰ Daily: 10am - 10pm
                        </div>

                        <div class="branch">
                            <strong style="font-size:18px">Rosebank Branch</strong><br>
                            45 Mall Avenue, Rosebank, 2196<br>
                            📞 (011) 765-4321<br>
                            ⏰ Daily: 11am - 11pm | Sun: 11am - 9pm
                        </div>

                        <div class="branch">
                            <strong style="font-size:18px">Pretoria Branch</strong><br>
                            89 Tasty Lane, Hatfield, Pretoria, 0083<br>
                            📞 (012) 321-7890<br>
                            ⏰ Daily: 9am - 9pm
                        </div>
                    </div>
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
    <script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/contact.js"></script>
</body>

</html>