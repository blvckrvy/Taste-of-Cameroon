<?php

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$id = $_POST['id'];

try {
    $query = $pdo->prepare('DELETE FROM menuitem 
                            WHERE MenuItemID = ?');

    $query->bindParam(1, $id);

    if ($query->execute()) {
        echo "Product deleted";
    } else {
        echo "Error query";
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
