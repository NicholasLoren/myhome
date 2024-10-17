<?php
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
$condo_code = $_POST['condo_code'];
$features = isset($_POST['features']) ? $_POST['features'] : [];

// Create an array to hold feature columns and their values
$columns = ['refrigerator', 'gym', 'washer', 'barbeque', 'hangers', 'microwave', 'sauna', 'dryer', 'laundry', 'shower', 'internet'];
$updateFields = [];

foreach ($columns as $column) {
    $value = in_array($column, $features) ? 1 : 0;
    $updateFields[] = "$column = $value";
}

// Prepare the SQL statement
$sql = "UPDATE tbl_condominium_features SET " . implode(', ', $updateFields) . " WHERE condo_code = '" . $conn->real_escape_string($condo_code) . "'";

if ($conn->query($sql) === TRUE) {
    $msg = "Record updated successfully";
    header("location: ../index.php?page=add_condominium_features&Id=$condo_code");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
