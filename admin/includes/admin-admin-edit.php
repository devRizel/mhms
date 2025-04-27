<?php
// Include database connection
include('../includes/db_connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $role = $_POST['status'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Ensure you sanitize the inputs to avoid SQL injection
    $fullname = mysqli_real_escape_string($conn, $fullname);
    $phone = mysqli_real_escape_string($conn, $phone);
    $role = mysqli_real_escape_string($conn, $role);
    $email = mysqli_real_escape_string($conn, $email);
    
    // If the password is provided, hash it
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    } else {
        $hashed_password = NULL; // Keep existing password if not updated
    }

    // Assuming you pass the user ID in a hidden field or session
    $user_id = $_SESSION['user_id']; // or $_GET['id'] if the ID is passed via URL

    // SQL to update user details
    $sql = "UPDATE users SET fullname = '$fullname', phone = '$phone', status = '$role', email = '$email'";

    // Update password if it is provided
    if ($hashed_password) {
        $sql .= ", password = '$hashed_password'";
    }

    // Add condition to update specific user
    $sql .= " WHERE id = '$user_id'"; // Make sure 'id' is the unique identifier for the user

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect back to admin page with success message
        header("Location: admin-dashboard.php?message=Changes saved successfully");
        exit();
    } else {
        // Handle error
        echo "Error: " . mysqli_error($conn);
    }
}
?>
