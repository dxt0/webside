<?php
// Database connection
$conn = mysqli_connect("sql209.infinityfree.com", "if0_39062289", "W0YF0B6nWAcsm", "if0_39062289_hostelmanagementsystem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $email = "student@example.com"; // Replace with session data in a full system

    $sql = "INSERT INTO issues (email, subject, description) VALUES ('$email', '$subject', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Issue Submitted Successfully'); window.location.href='dashboard.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
