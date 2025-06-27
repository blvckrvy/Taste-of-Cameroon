<?php
//redirect to this page if access was unauthorized
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: admin.php");
    exit;
}

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$query = $pdo->prepare("SELECT * FROM reservations");
$query->execute();

$bookings = array();

while ($val = $query->fetch()) {
    $bookings[] = $val;
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

    <title>Taste of Cameroon | Admin</title>
</head>

<body>
    <div class="root">
        <div class="sidebar">
            <div class="side-header">
                <img class="logo" src="Images/logo.png" alt="Taste of Cameroon" />
            </div>

            <div class="menu-list">
                <a href="admin-products.php">
                    <div class="menu">
                        Products
                    </div>
                </a>
                <div class="menu">
                    Reservations
                </div>
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
                        <h1>Reservations list</h1>
                        <div class="breadcrumbs">
                            <div id="home">
                                <i class="fa-solid fa-house"></i><a href=index.php> Home</a> |
                            </div>
                            <div>
                                <i class="fa-regular fa-calendar-days"></i> Reservations |
                            </div>
                            <div>
                                <i class="fa-solid fa-right-from-bracket"></i><a href="logout.php"> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Party Size</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;" id="bookings-added">
                        <?php
                        foreach ($bookings as $booking) {
                        ?>
                            <tr class="booking-row" data-id="<?= $booking['ReservationID'] ?>">
                                <td class="e-name"><?= $booking['FullName'] ?></td>
                                <td class="e-email"><?= $booking['Email'] ?></td>
                                <td class="e-phone"><?= $booking['Telephone'] ?></td>
                                <td class="e-date"><?= $booking['Date'] ?></td>
                                <td class="e-time"><?= $booking['Time'] ?></td>
                                <td class="e-qty"><?= $booking['Quantity'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/8c5181e141.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/admin-reservations.js"></script>
</body>

</html>