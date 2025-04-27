<?php

$servername = "localhost";  // or your host (e.g., localhost or an IP address)
$username = "root";         // your database username (often "root" by default)
$password = "";             // your database password (empty by default on localhost)
$dbname = "mhms";  // replace "your_database" with the name of your database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data and sanitize it
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    
    // Sanitize the phone number by removing non-numeric characters
    $phone = preg_replace('/\D/', '', $_POST['phone']);  // Removing any non-digit characters
    
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if all fields are filled
    if (empty($fullname) || empty($phone) || empty($role) || empty($email) || empty($password)) {
        header("Location: ../admin.php?appointment=error&message=empty_fields");
        exit;
    }

    // Check if phone number is exactly 11 digits
    if (strlen($phone) != 11) {
        header("Location: ../admin.php?appointment=error&message=invalid_phone");
        exit;
    }

    // Check if the email already exists
    $email_check_query = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    $existing_user = mysqli_fetch_assoc($result);

    if ($existing_user) {
        header("Location: ../admin.php?appointment=error&message=duplicate_email");
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the data into the database
    $sql = "INSERT INTO admin (fullname, status, phone, email, password) VALUES ('$fullname', '$role', '$phone', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../admin.php?appointment=success");
        exit;
    } else {
        header("Location: ../admin.php?appointment=error&message=insert_failed");
        exit;
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
