<?php
// clear_messages.php
include 'db_connect.php';

// Prepare the delete statement
$stmt = $pdo->prepare("DELETE FROM messages");
$stmt->execute();
?>
