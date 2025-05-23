<?php
include("includes/db.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($res);

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials";
    }
}
?>
<form method="POST">
  <input name="email" type="email" required placeholder="Email">
  <input name="password" type="password" required placeholder="Password">
  <button type="submit">Login</button>
</form>
