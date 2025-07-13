<?php
$conn = new mysqli("localhost", "root", "", "users_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $getStatus = $conn->query("SELECT status FROM users WHERE id=$id");
    $row = $getStatus->fetch_assoc();
    $newStatus = ($row['status'] == 1) ? 0 : 1;

    $conn->query("UPDATE users SET status=$newStatus WHERE id=$id");
}

header("Location: index.php");
?>