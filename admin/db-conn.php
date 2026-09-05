<?php
error_reporting(E_ALL);
// session_start();


// Database Configuration
$local = true; // Set to false for live server

if ($local) {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'harvest';
    $site = "https://localhost/projects/harvest/";
    // $site = "https://shbtechmed.com/";
} else {
     $host = 'localhost';
    $username = 'u799879276_dngfire';
    $password = 'Dng@fire1';
    $dbName = 'u799879276_dngfire';
    $site = 'https://dngfireengineering.com/';
}
// Create Database Connection
$conn = new mysqli($host, $username, $password, $dbName);

// Check Connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Optional: Set Character Encoding to UTF-8
$conn->set_charset("utf8");
