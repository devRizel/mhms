<?php
session_start(); // Start the session

include_once "../includes/conn.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE email = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['admin_id'] = $row['id']; 
        $_SESSION['admin_email'] = $row['email'];  
        $_SESSION['admin_name'] = $row['fullname']; 
        $_SESSION['admin_last_login'] = $row['last_login'];  
        $_SESSION['admin_avatar'] = $row['avatar'];  

        $_SESSION['status'] = 'Login Successful';
        $_SESSION['status_icon'] = 'success'; 

        echo "success";
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "Email or password is incorrect.";
}
?>
