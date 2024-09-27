<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "management_system";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if all required fields are set in POST request
if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])) {
    // Sanitize input data
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Prepare SQL statement to insert new user
    $sql = "INSERT INTO users (user_fname, user_lname, user_email, user_password, otp) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $otp = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $otp);

    // Execute the statement
    if ($stmt->execute()) {
        echo "success";
        $_SESSION['email'] = $email;
    } else {
        echo "error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "error: Missing required fields";
}

$conn->close();
?>