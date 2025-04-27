<?php
include_once 'includes/conn.php';  // Include your database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch staff data based on the ID
    $sql = "SELECT * FROM admin WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $staff = $result->fetch_assoc();
        echo json_encode($staff);
    } else {
        echo json_encode(['error' => 'Staff not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid ID']);
}

$conn->close();
?>
