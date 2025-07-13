<?php
$conn = new mysqli("localhost", "root", "", "users_db");
$result = $conn->query("SELECT * FROM users");

echo "<table>
<tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['status']}</td>
        <td>
            <form action='toggle_status.php' method='POST' style='display:inline'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <input type='submit' value='Toggle'>
            </form>
        </td>
    </tr>";
}
echo "</table>";
?>