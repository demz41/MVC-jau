<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add User</h2>
    <form method="POST" action="index.php?action=store">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Save</button>
    </form>
    <br>
    <a href="index.php">Back to Users</a>
</body>
</html>
