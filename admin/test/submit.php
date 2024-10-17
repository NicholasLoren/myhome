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
$apartment_code = $_POST['apartment_code'];
$features = isset($_POST['features']) ? $_POST['features'] : [];

// Create an array to hold feature columns and their values
$columns = ['apartment_code', 'refrigerator', 'gym', 'washer', 'barbeque', 'hangers', 'microwave', 'sauna', 'dryer', 'laundry', 'shower', 'internet'];
$values = [];

foreach ($columns as $column) {
    if ($column == 'apartment_code') {
        $values[] = "'" . $conn->real_escape_string($apartment_code) . "'";
    } else {
        $values[] = in_array($column, $features) ? '1' : '0';
    }
}

// Prepare the SQL statement
$sql = "INSERT INTO tbl_rental_apartment_features (" . implode(', ', $columns) . ") VALUES (" . implode(', ', $values) . ")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
