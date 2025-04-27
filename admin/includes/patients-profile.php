<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['patient_id'])) {
    header('Location: ../../login.php');
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

// Always refresh the session with latest data from database
$patient_id = $_SESSION['patient_id'];

// Retrieve the current profile image from the database
$query = "SELECT profile_image FROM patients WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $patient_id);
$stmt->execute();
$stmt->bind_result($profile_image);
$stmt->fetch();
$stmt->close();

// Set the default image if no profile image is set
$profile_image_path = 'admin/includes/images/patients.png'; // Default image
if ($profile_image) {
    // Check if the file exists
    $profile_image_path = '/admin/includes/uploads/' . $profile_image;
}

// Check if a file is uploaded
if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['profile_image']['tmp_name'];
    $fileName = $_FILES['profile_image']['name'];
    $fileSize = $_FILES['profile_image']['size'];
    $fileType = $_FILES['profile_image']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Sanitize file name
    $newFileName = uniqid('profile_', true) . '.' . $fileExtension;

    // Allowed file extensions
    $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        // Directory to upload
        $uploadFileDir = '../../admin/includes/uploads/';
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            // Save the filename to the database
            $query = "UPDATE patients SET profile_image = ? WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('si', $newFileName, $patient_id);

            if ($stmt->execute()) {
                // Reload the page after upload to update the profile image
                header("Location: ../../patient-profile.php?upload=success");
                exit;
            } else {
                echo "Database error!";
            }
        } else {
            echo "Error moving the file.";
        }
    } else {
        echo "Upload failed. Allowed file types: " . implode(',', $allowedfileExtensions);
    }
} else {
    echo "No file uploaded or upload error!";
}
?>
