<?php
// save_message.php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure POST data is received
    if (isset($_POST['sender']) && isset($_POST['content'])) {
        $sender = $_POST['sender'];
        $content = $_POST['content'];

        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO messages (sender, content) VALUES (?, ?)");
        if ($stmt->execute([$sender, $content])) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to save message.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Missing data.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
