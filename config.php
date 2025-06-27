<?php
$servername = "localhost";
$username = "blvckrvy";
$password = "#JellyBabies20#";
$databaseName = "cameroon_db";

// Attempt to connect
$connection = mysqli_connect($servername, $username, $password, $databaseName, 3307);

// Check connection
if ($connection === false) {
    die("ERROR: Could not connect! " . mysqli_connect_error());
}

echo "Connection Successful!";
