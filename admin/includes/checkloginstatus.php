<?php


// Check if the user is logged in by verifying the session variables
if (!isset($_SESSION['admin_id'], $_SESSION['admin_email'], $_SESSION['admin_name'])) {
    // If not logged in, redirect to the login page
    header("Location: index.php");
    exit();
}
?>
