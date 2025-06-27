<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: admin-products.php");
    exit;
}

$hardcoded_username = "blvckrvy";
$hardcoded_password = "Bl@ckman20#";

//check if form is submitted, compare and redirect if yes and correct
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['uname'] ?? '';
    $password = $_POST['pass'] ?? '';

    if ($username === $hardcoded_username && $password === $hardcoded_password) {
        $_SESSION['loggedin'] = true;
        header("Location: admin-products.php");
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }
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

    <link rel="stylesheet" href="CSS/admin.css">

    <title>Taste of Cameroon</title>
</head>

<body>
    <header>
        <div class="container">
            <a href="index.php">
                <img src="Images/logo.png" alt="logo" />
            </a>
            <hr />
        </div>
    </header>

    <section>
        <div id="box" class="newcontainer">
            <br />
            <h1 id="text">Admin Login</h1><br />

            <?php if (!empty($error_message)): ?>
                <p style="color: red; text-align:center;">
                    <?php echo $error_message; ?>
                </p>
            <?php endif; ?>

            <form action="admin.php" method="post">
                <div id="account">
                    <label style="font-size: 20px;" for="username"><b>Username: </b></label><br>
                    <input type="text" id="uname" name="uname" required />
                </div><br />

                <div id="account">
                    <label style="font-size: 20px;" for="pass"><b>Password: </b></label>
                    <div class="password-container">
                        <input style="margin-left: 30px;" type="password" id="pass" name="pass" required />
                        <span style="cursor: pointer; margin-left: 5px;" class="password-toggle" onclick="togglePassword('pass')">
                            <i class="fa-regular fa-eye"></i>
                        </span>
                    </div>
                </div><br />

                <div id="BTN">
                    <button type="submit" name="login"><b>Login</b></button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/8c5181e141.js" crossorigin="anonymous"></script>

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const toggle = field.nextElementSibling;
            const icon = toggle.querySelector('i');
            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>