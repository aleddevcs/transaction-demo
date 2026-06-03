<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Customer Dashboard</h1>

    <p>Welcome, <?php echo $_SESSION["username"]; ?>.</p>

    <p>This is where orders, products or account details could appear.</p>

    <a href="index.php">Home</a>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
