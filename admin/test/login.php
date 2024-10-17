<?php
session_start(); // Start the session

// Database configuration
$host = 'localhost'; // Change this to your database host
$dbname = 'myhome_db'; // Change this to your database name
$user = 'root'; // Change this to your database username
$pass = ''; // Change this to your database password

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password using SHA-1
$hashed_password = sha1($password);

// Check the credentials
$sql = "SELECT * FROM tbl_users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $username, $hashed_password); // Using prepared statements to prevent SQL injection
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // User found
    $_SESSION['username'] = $username;
    header('Location: dashboard.php'); // Redirect to a protected page
    exit();
} else {
    // Authentication failed
    echo "Invalid username or password";
}

$stmt->close();
$conn->close();
?>
