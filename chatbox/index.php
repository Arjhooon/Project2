<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h2>Select User</h2>
            <button onclick="selectUser('Arjhon')">Login as Arjhon</button>
            <button onclick="selectUser('Ara')">Login as Ara</button>
            <div class="login-message" id="loginMessage" style="display: none;"></div>
        </div>
        <div class="chat-container">
            <div id="loginMessage" style="display: none;"></div>
            <div id="chatBox" class="chat-box"></div>
            <div id="replyContainer" class="reply-container" style="display: none;"></div>
            <input type="text" id="messageInput" placeholder="Type your message..." />
            <button id="sendBtn">Send</button>
            <button id="clearBtn">Clear Messages</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
