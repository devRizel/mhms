<?php
// File: C:\xampp\htdocs\mhms\admin\functions\admin\add_admin.php
include_once '../../includes/conn.php'; // correct path to connection.php

// Always send JSON
header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        $response['message'] = 'Passwords do not match.';
        echo json_encode($response);
        exit;
    }

    // Handle avatar upload
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
        $targetDir = "../../includes/uploads/";
        $dbAvatarPath = "uploads/"; // path to store in database

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true); // Create uploads/ if it doesn't exist
        }

        $avatarName = uniqid() . "_" . basename($_FILES["avatar"]["name"]);
        $targetFilePath = $targetDir . $avatarName;

        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetFilePath)) {
            try {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $pdo->prepare("INSERT INTO admin (fullname, email, password, avatar, created_at, status) 
                    VALUES (:fullname, :email, :password, :avatar, NOW(), 'active')");
                
                $stmt->execute([
                    ':fullname' => $fullname,
                    ':email' => $email,
                    ':password' => $hashedPassword,
                    ':avatar' => $dbAvatarPath . $avatarName // ✅ Full relative path saved
                ]);

                $response['success'] = true;
                $response['message'] = 'Admin added successfully!';

            } catch (PDOException $e) {
                $response['message'] = "Database Error: " . $e->getMessage();
            }
        } else {
            $response['message'] = 'Failed to upload avatar.';
        }
    } else {
        $response['message'] = 'Avatar file is required.';
    }
}

echo json_encode($response);
exit;
?>
