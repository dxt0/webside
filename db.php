<?php
// Database connection for Hostel Management System

$servername = "sql209.infinityfree.com"; // Replace with your InfinityFree MySQL hostname
$username = "if0_39062289";      // Replace with your InfinityFree MySQL username
$password = "W0YF0B6nWAcsm";       // Replace with your actual MySQL password
$database = "if0_39062289_hostelmanagementsystem"; // Replace with your actual database name

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
