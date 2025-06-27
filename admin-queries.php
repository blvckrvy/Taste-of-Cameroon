<?php
//redirect to this page if access was unauthorized
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: admin.php");
    exit;
}

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$query = $pdo->prepare("SELECT * FROM queries");
$query->execute();

$querys = array();

while ($val = $query->fetch()) {
    $querys[] = $val;
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
                <a href="admin-reservations.php">
                    <div class="menu">
                        Reservations
                    </div>
                </a>
                <div class="menu">
                    Queries
                </div>
            </div>
        </div>

        <div class="rightSide">
            <div class="header">
                <h1>ADMIN PANEL</h1>
            </div>
            <div class="content-right">
                <div class="header-title">
                    <div class="title">
                        <h1>Queries list</h1>
                        <div class="breadcrumbs">
                            <div id="home">
                                <i class="fa-solid fa-house"></i><a href=index.php> Home</a> |
                            </div>
                            <div>
                                <i class="fa-solid fa-question"></i> Queries |
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
                            <th>Query</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Join Team?</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;" id="querys-added">
                        <?php
                        foreach ($querys as $query) {
                        ?>
                            <tr class="query-row" data-id="<?= $query['QueriesID'] ?>">
                                <td class="e-name"><?= $query['FullName'] ?></td>
                                <td class="e-desc"><?= $query['Description'] ?></td>
                                <td class="e-email"><?= $query['Email'] ?></td>
                                <td class="e-phone"><?= $query['Telephone'] ?></td>
                                <td class="e-join"><?= $query['JoinTeam'] == 1 ? "Yes" : "No" ?></td>
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
    <script src="JS/admin-queries.js"></script>
</body>

</html>