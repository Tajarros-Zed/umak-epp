<?php
require_once 'db_connection.php';

if(isset($_POST['email'])) {
    $email = $conn->real_escape_string($_POST['email']);
    
    $sql = "SELECT * FROM users WHERE user_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    echo ($result->num_rows > 0) ? "exists" : "not_exists";
    
    $stmt->close();
} else {
    echo "No email provided";
}

$conn->close();
?>