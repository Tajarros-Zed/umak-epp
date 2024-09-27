<?php
session_start();
require 'db_connection.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare SQL statement to fetch user
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ?");
    $stmt->bind_param("s", $email); 
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify user credentials
    if ($user && password_verify($password, $user["user_password"])) {
        // Authentication successful
        $_SESSION["user_id"] = $user["user_id"];
        echo "success";
    } else {
        // Authentication failed
        echo "error";
    }
} else {
    // Invalid request method
    echo "error";
}
