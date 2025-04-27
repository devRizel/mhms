<?php
include '../../includes/conn.php';

// Check if the admin ID is provided
if (isset($_POST['id'])) {
    $adminId = $_POST['id'];

    // Deactivate the admin by updating the status to 'inactive'
    $query = "UPDATE admin SET status = 'inactive' WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $adminId);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to deactivate admin']);
    }
} else {
    // Handle missing admin ID
    echo json_encode(['success' => false, 'message' => 'Missing admin ID']);
}
?>
