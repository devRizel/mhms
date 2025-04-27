<?php
include '../../includes/conn.php';

header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Get raw POST data
$data = json_decode(file_get_contents('php://input'), true);

// Check if parameters exist
if (!isset($_POST['id']) || !isset($_POST['status'])) {
    echo json_encode([
        'success' => false, 
        'message' => 'Missing parameters',
        'received_data' => $_POST // For debugging
    ]);
    exit;
}

$adminId = (int)$_POST['id'];
$status = $_POST['status'];

// Validate status
$allowedStatuses = ['active', 'inactive', 'suspended'];
if (!in_array($status, $allowedStatuses)) {
    echo json_encode(['success' => false, 'message' => 'Invalid status']);
    exit;
}

try {
    // Update admin status
    $sql = "UPDATE admin SET status = :status WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->bindParam(':id', $adminId, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update status']);
    }
} catch (PDOException $e) {
    echo json_encode([
        'success' => false, 
        'message' => 'Database error',
        'error' => $e->getMessage()
    ]);
}
?>