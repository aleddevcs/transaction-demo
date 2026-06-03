<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction Demo</title>
</head>
<body>
    <h1>Welcome to the Transaction Website Demo</h1>

    <p>This is a simple homepage.</p>

    <?php if (isset($_SESSION['username'])): ?>
        <p>You are logged in as <?php echo $_SESSION['username']; ?>.</p>
        <a href="dashboard.php">Go to dashboard</a>
        <br>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
    <?php endif; ?>
</body>
</html>
