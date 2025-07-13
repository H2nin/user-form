<?php
$conn = new mysqli("localhost", "root", "", "users_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $conn->query("INSERT INTO users (name, age) VALUES ('$name', $age)");
}

header("Location: index.php");
?>