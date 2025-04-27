<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['patient_id'])) {
    header('Location: ../../login.php');
    exit();  // Stop execution if the user is not logged in
}

// Fetch the patient ID from the session
$patient_id = $_SESSION['patient_id'];

// Get the appointment details from the form
$appointmentDate = filter_input(INPUT_POST, 'appointmentDate', FILTER_SANITIZE_STRING);
$appointmentTime = filter_input(INPUT_POST, 'appointmentTime', FILTER_SANITIZE_STRING);
$appointmentDetails = filter_input(INPUT_POST, 'appointmentDetails', FILTER_SANITIZE_STRING);

// Validate the inputs
if (!$appointmentDate || !$appointmentTime || !$appointmentDetails) {
    echo "All fields are required!";
    exit;
}

// Validate that the appointment date is not in the past
$currentDate = date('Y-m-d');  // Get the current date in 'YYYY-MM-DD' format
if ($appointmentDate < $currentDate) {
    header("Location: ../../patient-dashboard.php?appointment=error&message=Appointment date cannot be in the past.");
    exit;
}

// Insert the appointment into the database
try {
    $pdo = new PDO('mysql:host=localhost;dbname=mhms', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Enable exception handling for errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC  // Fetch results as associative arrays
    ]);

    $stmt = $pdo->prepare("INSERT INTO appointments (appointment_date, appointment_time, appointment_details, patients_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$appointmentDate, $appointmentTime, $appointmentDetails, $patient_id]);

    // Redirect with a success parameter to trigger SweetAlert
    header("Location: ../../patient-dashboard.php?appointment=success");
    exit;

} catch (PDOException $e) {
    // Handle errors
    echo "Error: " . $e->getMessage();
}
?>
