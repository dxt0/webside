<?php
include("includes/db.php");
session_start();
$user_id = $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $room = $_POST['room'];
    mysqli_query($conn, "UPDATE users SET room_no='$room' WHERE id='$user_id'");
    echo "Room allotted successfully!";
}
?>
<form method="POST">
  <input name="room" required placeholder="Enter Room No">
  <button type="submit">Allot Room</button>
</form>
