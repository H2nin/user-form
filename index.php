<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Add New User</h2>
    <form action="add_user.php" method="POST">
        Name: <input type="text" name="name" required>
        Age: <input type="number" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <br><hr><br>

    <h2>All Users</h2>
    <div id="userTable">
        <?php include 'fetch_users.php'; ?>
    </div>
</body>
</html>