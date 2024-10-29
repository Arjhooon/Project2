<?php
// db_connect.php
$host = 'localhost';
$dbname = 'chatbox'; // Your database name
$username = 'root';  // Database username
$password = '';      // Database password (if any)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
