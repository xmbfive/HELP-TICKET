<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your database password
$dbname = "support_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$problem_name = $_POST['problem_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

// Prepare SQL query
$sql = "INSERT INTO tickets (problem_name, phone_number, email) VALUES (?, ?, ?)";

// Prepare statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $problem_name, $phone_number, $email);

// Execute the statement
if ($stmt->execute()) {
    echo "Support ticket created successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
