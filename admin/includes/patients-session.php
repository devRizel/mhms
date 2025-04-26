<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['patient_id'])) {
    header('Location: ../../login.php');
    exit();
}

// If first and last name not yet fetched
if (!isset($_SESSION['first_name']) || !isset($_SESSION['last_name']) || !isset($_SESSION['birthdate']) || !isset($_SESSION['email']) || !isset($_SESSION['phone'])) {
    // Connect to database
    $servername = "localhost";
    $username   = "root";
    $dbpassword = "";
    $dbname     = "mhms";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die('Database connection failed: ' . $conn->connect_error);
    }

    $patient_id = $_SESSION['patient_id'];

    $stmt = $conn->prepare("SELECT first_name, last_name, birthdate, email, phone FROM patients WHERE id = ?");
    $stmt->bind_param("i", $patient_id);
    $stmt->execute();
    $stmt->bind_result($first_name, $last_name, $birthdate, $email, $phone);
    $stmt->fetch();

    // Store the details in session
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name']  = $last_name;
    $_SESSION['birthdate']  = $birthdate;
    $_SESSION['email']      = $email;
    $_SESSION['phone']      = $phone;

    $stmt->close();
    $conn->close();
}
?>
