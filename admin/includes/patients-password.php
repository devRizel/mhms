<?php
// Include the database connection file
include('conn.php'); // Ensure this path is correct

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form inputs
    $current_password = $_POST['current-password'];
    $new_password = $_POST['new-password'];
    $confirm_password = $_POST['confirm-password'];
    
    // Assuming the session has a logged-in patient ID
    session_start();
    $patient_id = $_SESSION['patient_id']; // Replace with your session logic

    // Validate input fields
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        header('Location: ../../patient-profile.php?error=empty_fields');
        exit();
    }

    if ($new_password !== $confirm_password) {
        header('Location: ../../patient-profile.php?error=password_mismatch');
        exit();
    }

    // Retrieve the current password from the database
    $sql = "SELECT password FROM patients WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$patient_id]);
    $patient = $stmt->fetch();

    if (!$patient) {
        header('Location: ../../patient-profile.php?error=patient_not_found');
        exit();
    }

    // Verify current password
    if (!password_verify($current_password, $patient['password'])) {
        header('Location: ../../patient-profile.php?error=incorrect_current_password');
        exit();
    }

    // Hash the new password using bcrypt
    $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

    // Update the password in the database
    $update_sql = "UPDATE patients SET password = ? WHERE id = ?";
    $update_stmt = $pdo->prepare($update_sql);
    $update_stmt->execute([$hashed_password, $patient_id]);

    // Redirect to the same page with success message
    header('Location: ../../patient-profile.php?success=password_updated');
    exit();
}
?>
