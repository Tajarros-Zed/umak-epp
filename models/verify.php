<?php
session_start();

if(isset($_POST['otp'])) {
    $otp = $_POST['otp'];
    $email = $_SESSION['email'];
    
    require_once 'db_connection.php';

    $sql = "SELECT * FROM users WHERE user_email = ? AND otp = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $otp);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // Update otp to 0
        $sql = "UPDATE users SET otp = 0 WHERE user_email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid verification code']);
    }

    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'No OTP provided']);
}

$conn->close();
