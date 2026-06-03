
<?php
$host = "db";
$user = "root";
$password = "root";
$database = "transaction_demo";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
