<?php
//redirect to this page if access was unauthorized
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: admin.php");
    exit;
}

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$query = $pdo->prepare("SELECT * FROM menuitem");
$query->execute();

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

    <link rel="stylesheet" href="CSS/admin-pages.css">
    <link rel="stylesheet" href="CSS/create-product.css">
    <link rel="stylesheet" href="CSS/edit-product.css">
    <link rel="stylesheet" href="CSS/delete-product.css">

    <title>Taste of Cameroon | Admin</title>
</head>

<body>
    <div class="root">
        <div class="sidebar">
            <div class="side-header">
                <img class="logo" src="Images/logo.png" alt="Taste of Cameroon" />
            </div>

            <div class="menu-list">
                <div class="menu">
                    Products
                </div>
                <a href="admin-reservations.php">
                    <div class="menu">
                        Reservations
                    </div>
                </a>
                <a href="admin-queries.php">
                    <div class="menu">
                        Queries
                    </div>
                </a>
            </div>
        </div>

        <div class="rightSide">
            <div class="header">
                <h1>ADMIN PANEL</h1>
            </div>
            <div class="content-right">
                <div class="header-title">
                    <div class="title">
                        <h1>Products list</h1>
                        <div class="breadcrumbs">
                            <div id="home">
                                <i class="fa-solid fa-house"></i><a href=index.php> Home</a> |
                            </div>
                            <div>
                                <i class="fa-solid fa-bottle-droplet"></i> Products |
                            </div>
                            <div>
                                <i class="fa-solid fa-right-from-bracket"></i><a href="logout.php"> Logout</a>
                            </div>
                        </div>
                    </div>
                    <button class="add-btn">Add Product</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="products-added">
                        <?php
                        foreach ($products as $product) {
                        ?>
                            <tr class="product-row" data-id="<?= $product['MenuItemID'] ?>">
                                <td class="column-image">
                                    <div class="e-image" data-img="<?= $product['ImageURL'] ?>">
                                        <img width="80px" src="<?= $product['ImageURL'] ?>" />
                                    </div>
                                </td>
                                <td class="e-name"><?= $product['ItemName'] ?></td>
                                <td class="e-desc"><?= $product['Description'] ?></td>
                                <td class="e-category"><?= $product['Category'] ?></td>
                                <td class="e-price"><?= $product['Price'] ?></td>
                                <td class="action-col">
                                    <div>
                                        <i class="fa-solid fa-pen-to-square edit-icon"></i>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-trash delete-icon"></i>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- create product modal -->
    <?php
    include("HTML/create-product.html");
    ?>

    <!-- edit product modal -->
    <?php
    include("HTML/edit-product.html");
    ?>

    <!-- delete product modal -->
    <?php
    include("HTML/delete-product.html");
    ?>

    <script src="https://kit.fontawesome.com/8c5181e141.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/admin_products.js"></script>
</body>

</html>