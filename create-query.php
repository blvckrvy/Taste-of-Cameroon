<?php
$recaptchaResponse = $_POST['g-recaptcha-response'];
$secretKey = '6Ld-IRMrAAAAABbdw75fG4v2H2qW1Gp3HSmrOZAF';
$userIP = $_SERVER['REMOTE_ADDR'];

$verifyURL = 'https://www.google.com/recaptcha/api/siteverify';
$data = [
    'secret' => $secretKey,
    'response' => $recaptchaResponse,
    'remoteip' => $userIP
];

// Use cURL to send POST request to Google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $verifyURL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$result = json_decode($response, true);

if (!$result['success']) {
    echo "reCAPTCHA verification failed. Please try again.";
    exit; // Stop further processing
}

$pdo = new PDO("mysql:host=localhost;port=3307;dbname=cameroon_db", 'blvckrvy', '#JellyBabies20#');

$Fname = $_POST['FName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['description'];
$joinTeam = isset($_POST['checkbox']) && $_POST['checkbox'] == 'on' ? 1 : 0;

try {
    $query = $pdo->prepare('INSERT INTO queries (Description, FullName, Email, Telephone, JoinTeam)
                            VALUES (?,?,?,?,?)');

    $query->bindParam(1, $desc);
    $query->bindParam(2, $Fname);
    $query->bindParam(3, $email);
    $query->bindParam(4, $phone);
    $query->bindParam(5, $joinTeam);

    //execute the query
    if ($query->execute()) {
        echo "Query saved!";
    } else {
        echo "Failed to save query.";
    }
} catch (PDOException $e) {
    echo 'Query failed: ' . $e->getMessage();
}
