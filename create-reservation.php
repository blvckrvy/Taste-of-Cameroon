<?php
$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$Fname = $_POST['FName'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$date = $_POST['date'];
$time = $_POST['time'];
$partySize = $_POST['partySize'];

try {
    $query = $pdo->prepare('INSERT INTO reservations (Date, Time, Quantity, FullName, Email, Telephone)
                            VALUES (?,?,?,?,?,?)');

    $query->bindParam(1, $date);
    $query->bindParam(2, $time);
    $query->bindParam(3, $partySize);
    $query->bindParam(4, $Fname);
    $query->bindParam(5, $email);
    $query->bindParam(6, $phone);

    // Execute the query
    if ($query->execute()) {
        echo "Reservation saved!";
    } else {
        echo "Failed to save reservation.";
    }
} catch (PDOException $e) {
    echo 'Booking failed: ' . $e->getMessage();
}
