<?php
// admin/includes/signup.php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form values and sanitize them
    $firstName       = htmlspecialchars(trim($_POST['first_name']));
    $lastName        = htmlspecialchars(trim($_POST['last_name']));
    $email           = htmlspecialchars(trim($_POST['email']));
    $phone           = htmlspecialchars(trim($_POST['phone']));
    $birthdate       = htmlspecialchars(trim($_POST['birthdate']));
    $password        = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $termsAccepted   = isset($_POST['terms']);

    // Validate form
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone)
        || empty($birthdate) || empty($password) || empty($confirmPassword)) {
        header('Location: ../../signup.php?error=empty_fields');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../../signup.php?error=invalid_email');
        exit();
    }

    // Ensure phone is exactly 11 digits
    if (!preg_match('/^\d{11}$/', $phone)) {
        header('Location: ../../signup.php?error=invalid_phone_length');
        exit();
    }

    // **Ensure birthdate is not in the future**
    if (strtotime($birthdate) > time()) {
        header('Location: ../../signup.php?error=invalid_birthdate');
        exit();
    }

    if ($password !== $confirmPassword) {
        header('Location: ../../signup.php?error=password_mismatch');
        exit();
    }

    if (!$termsAccepted) {
        header('Location: ../../signup.php?error=no_terms');
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database
    $servername = "localhost";
    $username   = "root";
    $dbpassword = "";
    $dbname     = "mhms";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    if ($conn->connect_error) {
        header('Location: ../../patients-signup.php?error=connection_failed');
        exit();
    }

    // Check if email already exists
    $checkStmt = $conn->prepare("SELECT id FROM patients WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();
    if ($checkStmt->num_rows > 0) {
        $checkStmt->close();
        $conn->close();
        header('Location: ../../patients-signup.php?error=email_exists');
        exit();
    }
    $checkStmt->close();

    // Insert into database
    $stmt = $conn->prepare(
      "INSERT INTO patients (first_name, last_name, email, phone, birthdate, password)
       VALUES (?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param(
      "ssssss",
      $firstName, $lastName, $email, $phone, $birthdate, $hashedPassword
    );

    if ($stmt->execute()) {
        header('Location: ../../login.php?signup=success');
        exit();
    } else {
        header('Location: ../../patients-signup.php?error=' . urlencode($stmt->error));
        exit();
    }

    $stmt->close();
    $conn->close();

} else {
    // If accessed directly
    header('Location: ../../patients-signup.php');
    exit();
}
?>
