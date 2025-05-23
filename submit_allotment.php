<?php
// Database connection
$conn = mysqli_connect("sql209.infinityfree.com", "if0_39062289", "W0YF0B6nWAcsm", "if0_39062289_hostelmanagementsystem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hostel = mysqli_real_escape_string($conn, $_POST['hostel']);
    $room_number = mysqli_real_escape_string($conn, $_POST['room_number']);
    $email = "student@example.com"; // Replace with session email when login is implemented

    $sql = "INSERT INTO allotments (email, hostel, room_number) VALUES ('$email', '$hostel', '$room_number')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Room Allotted Successfully'); window.location.href='dashboard.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
