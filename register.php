<?php
include("includes/db.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hostel = $_POST['hostel'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, hostel, password) VALUES ('$name', '$email', '$hostel', '$password')";
    mysqli_query($conn, $query);
    header("Location: login.php");
}
?>
<form method="POST">
  <input name="name" required placeholder="Name">
  <input name="email" type="email" required placeholder="Email">
  <select name="hostel" required>
    <option value="H1">H1</option>
    <option value="H2">H2</option>
    <option value="H3">H3</option>
  </select>
  <input name="password" type="password" required placeholder="Password">
  <button type="submit">Register</button>
</form>
