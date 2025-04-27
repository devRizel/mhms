<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and retrieve the form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Check if the email and password are provided
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please enter both email and password.";
        header('Location: ../index.php');  // Redirect back to login page
        exit;
    }

    // Query to check if the email exists in the admin table
    $query = "SELECT * FROM admin WHERE email = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {  // Use mysqli_prepare with $conn
        mysqli_stmt_bind_param($stmt, 's', $email); // 's' for string
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Check if the email exists in the database
        if (mysqli_num_rows($result) > 0) {
            $admin = mysqli_fetch_assoc($result);

            // Verify the password using bcrypt (password is hashed in the database)
            if (password_verify($password, $admin['password'])) {
                // Set session variables
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_email'] = $admin['email'];

                // Redirect to the dashboard
                header('Location: ../dashboard.php');
                exit;
            } else {
                // Incorrect password
                $_SESSION['error'] = "Incorrect password.";
                header('Location: ../index.php');
                exit;
            }
        } else {
            // Email not found
            $_SESSION['error'] = "Email not found.";
            header('Location: ../index.php');
            exit;
        }

        mysqli_stmt_close($stmt);
    } else {
        // Database query error
        $_SESSION['error'] = "Database error. Please try again later.";
        header('Location: ../index.php');
        exit;
    }
} else {
    // If form is not submitted, redirect to login page
    header('Location: ../index.php');
    exit;
}
?>
