<?php
// admin/includes/patients-login.php

session_start();

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get and sanitize input
    $email    = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);

    // Validate inputs
    if (empty($email) || empty($password)) {
        header('Location: ../../login.php?error=empty_fields');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../../login.php?error=invalid_email');
        exit();
    }

    // Connect to database
    $servername = "localhost";
    $username   = "root";
    $dbpassword = "";
    $dbname     = "mhms";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    if ($conn->connect_error) {
        header('Location: ../../login.php?error=connection_failed');
        exit();
    }

    // Check if email exists
    $stmt = $conn->prepare("SELECT id, email, password FROM patients WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        // Email not found
        $stmt->close();
        $conn->close();
        header('Location: ../../login.php?error=email_not_found');
        exit();
    }

    $stmt->bind_result($id, $db_email, $db_password);
    $stmt->fetch();

    // Verify password
    if (!password_verify($password, $db_password)) {
        $stmt->close();
        $conn->close();
        header('Location: ../../login.php?error=wrong_password');
        exit();
    }

    // Success: store session variables
    $_SESSION['patient_id']    = $id;
    $_SESSION['patient_email'] = $db_email;

    $stmt->close();
    $conn->close();

    // Redirect to dashboard
    header('Location: ../../patient-dashboard.php');
    exit();

} else {
    // If accessed directly
    header('Location: ../../login.php');
    exit();
}
?>
