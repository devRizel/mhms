<?php
// Database connection settings
$host = 'localhost'; // Database host
$dbname = 'mhms'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    // Create a PDO instance to connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception to catch errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error (display the error message)
    die("Database connection failed: " . $e->getMessage());
}
?>
