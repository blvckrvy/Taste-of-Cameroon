<?php
var_dump($_POST);
var_dump($_FILES);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

error_log(print_r($_FILES, true));
error_log(print_r($_POST, true));

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$name = $_POST['Iname'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];

function uploadFile()
{
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $uploadFileDir = './Products-Added/';
        $dest_path = $uploadFileDir . $fileName;

        // validate file and type
        $fileType = $_FILES['image']['type'];
        $allowedFileTypes = ['image/jpeg', 'image/jpg', 'image/png'];

        if (!in_array($fileType, $allowedFileTypes)) {
            echo "Invalid file type.";
            return false;
        }

        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExt = ['jpg', 'jpeg', 'png'];

        if (!in_array($ext, $allowedExt)) {
            echo "Invalid file extension.";
            return false;
        }

        $uniqueName = uniqid() . '_' . basename($fileName);
        $dest_path = $uploadFileDir . $uniqueName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            return $dest_path;
        } else {
            return false;
        }
    } else {
        echo "File upload error code: " . $_FILES['image']['error'];
        return false;
    }
}

try {
    $query = $pdo->prepare('INSERT INTO menuitem (ItemName, Description, Price, ImageURL, Category)
                            VALUES (?, ?, ?, ?, ?)');


    $uploadedImage = uploadFile();

    if ($uploadedImage) {
        $query->bindParam(1, $name);
        $query->bindParam(2, $description);
        $query->bindParam(3, $price);
        $query->bindParam(4, $uploadedImage);
        $query->bindParam(5, $category);
        if ($query->execute()) {
            echo "Product added";
        } else {
            echo "Error query";
        }
    } else {
        echo "File uploading error";
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
