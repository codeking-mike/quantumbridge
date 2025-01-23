<?php

// Database configuration
$servername = "localhost";
$username = "fxdb_user"; // Replace with your DB username
$password = "FXdb@2024";     // Replace with your DB password
$dbname = "market_db"; // Replace with your DB name

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

