<a href="index.php?action=new">➕ Add New User</a>
<br><br>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
</tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['email']; ?></td>
    <td>
        <a href="index.php?action=edit&id=<?= $row['id']; ?>">Edit</a> |
        <a href="index.php?action=delete&id=<?= $row['id']; ?>" onclick="return confirm('Delete this user?');">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
