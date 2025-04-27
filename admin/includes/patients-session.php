<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['patient_id'])) {
    header('Location: .../../login.php');
    exit();
}

// Connect to database
$servername = "localhost";
$username   = "root";
$dbpassword = "";
$dbname     = "mhms";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

// Always refresh the session with latest data from the database
$patient_id = $_SESSION['patient_id'];

// Fetch patient details
$stmt = $conn->prepare("SELECT first_name, last_name, birthdate, email, phone, profile_image, created_at, btype FROM patients WHERE id = ?");
if ($stmt === false) {
    die('Statement preparation failed: ' . $conn->error);
}
$stmt->bind_param("i", $patient_id);
$stmt->execute();
$stmt->bind_result($first_name, $last_name, $birthdate, $email, $phone, $profile_image, $created_at, $btype);
$stmt->fetch();

// Update the session variables with fresh data
$_SESSION['first_name']  = $first_name;
$_SESSION['last_name']   = $last_name;
$_SESSION['birthdate']   = $birthdate;
$_SESSION['email']       = $email;
$_SESSION['phone']       = $phone;
$_SESSION['profile_image'] = $profile_image; // Store profile image in session
$_SESSION['created_at']  = $created_at; // Store created_at in session
$_SESSION['btype']       = $btype; // Store blood type in session

$stmt->close(); // Close the first statement and free the result

// Fetch the patient's appointments
$appointments_stmt = $conn->prepare("SELECT appointment_date, appointment_time, appointment_details FROM appointments WHERE patients_id = ?");
if ($appointments_stmt === false) {
    die('Appointments statement preparation failed: ' . $conn->error);
}
$appointments_stmt->bind_param("i", $patient_id);
$appointments_stmt->execute();
$appointments_result = $appointments_stmt->get_result();

// Store the appointments in an array to be displayed
$appointments = [];
while ($row = $appointments_result->fetch_assoc()) {
    $appointments[] = $row;
}

$appointments_stmt->free_result(); // Free the result set of the appointments query
$conn->close();

// Display the patient's information and appointments in HTML
?>
