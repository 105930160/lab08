<?php include 'header.inc'; ?>

<?php if (isset($_GET['error'])): ?>
    <p style="color:red;">Invalid username or password. Please try again.</p>
<?php endif; ?>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="abc123">
    <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>
