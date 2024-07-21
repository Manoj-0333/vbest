<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password is empty
$dbname = "user_registeration";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$payment = $_POST['payment'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

$stmt = $conn->prepare("INSERT INTO users (name, email, mobile, city, payment) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $mobile, $city, $payment);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to insert data']);
}

$stmt->close();
$conn->close();
?>
