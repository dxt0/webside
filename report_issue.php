<?php
include("includes/db.php");
session_start();
$user_id = $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $issue = $_POST['issue'];
    mysqli_query($conn, "INSERT INTO issues (user_id, issue) VALUES ('$user_id', '$issue')");
    echo "Issue reported!";
}
?>
<form method="POST">
  <textarea name="issue" placeholder="Describe your issue"></textarea>
  <button type="submit">Submit</button>
</form>
