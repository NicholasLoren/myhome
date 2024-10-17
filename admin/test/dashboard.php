<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.html'); // Redirect to login page if not logged in
    exit();
}

echo "<h1>Welcome, " . htmlspecialchars($_SESSION['username']) . "</h1>";
echo "<a href='logout.php'>Logout</a>";
