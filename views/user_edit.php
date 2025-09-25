<?php if (!empty($userData)): ?>
    <form method="POST" action="index.php?action=update">
        <input type="hidden" name="id" value="<?= $userData['id']; ?>">

        <label>Name:</label><br>
        <input type="text" name="name" value="<?= $userData['name']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $userData['email']; ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
<?php else: ?>
    <p>User not found.</p>
<?php endif; ?>
