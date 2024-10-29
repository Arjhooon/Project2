<?php
// load_messages.php
include 'db_connect.php';

$stmt = $pdo->query("SELECT * FROM messages ORDER BY timestamp ASC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($messages);
?>
