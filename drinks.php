<?php
$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$query = $pdo->prepare("SELECT * FROM menuitem 
                        WHERE Category = ?");
$query->execute(["Drinks"]);

$products = array();

while ($val = $query->fetch()) {
    $products[] = $val;
}
?>

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

    <link rel="stylesheet" href="CSS/menu-category-styles/drinks.css">
    <link rel="stylesheet" href="CSS/main.css">

    <title>Menu | Drinks & Beverages</title>
</head>

<body>
    <!-- header -->
    <?php
    include("HTML/header-menu-category.html");
    ?>

    <!-- media queries menu -->
    <?php
    include("HTML/media-navbar.html");
    ?>

    <!-- Desktop Nav -->
    <?php
    include("HTML/nav-menu-category.html");
    ?>

    <main>
        <section>
            <div class="title">
                <h1><i>Drinks & Beverages</i></h1>
            </div>
        </section>

        <section id="products" class="main-dishes-items">
            <div class="product-grid">
                <?php
                if (count($products) > 0) {
                    foreach ($products as $product) {
                ?>
                        <div class=product-card-container>
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="<?= $product['ImageURL'] ?>" alt="<?= $product['ItemName'] ?>">
                                </div>

                                <div class="product-info">
                                    <h3><?= $product['ItemName'] ?></h3>
                                    <h4>R <?= $product['Price'] ?></h4>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="nothing-to-display">
                        <p>Sincere apologies... we currently have no drink to display...</p>
                    </div>
                <?php
                }
                ?>
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