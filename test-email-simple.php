<?php
// Simple test to verify form submission works
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Form Data Received:</h2>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    echo "<p style='color: green; font-weight: bold;'>✓ Form submission working correctly!</p>";
    echo "<p>The form data is being captured properly. When deployed to a live server with proper email configuration, these messages will be sent to your email.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Email Test</title>
</head>
<body>
    <h1>Test Form Submission</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" value="Test User" required><br>
        <input type="email" name="email" placeholder="Email" value="test@example.com" required><br>
        <input type="text" name="phone" placeholder="Phone" value="123-456-7890"><br>
        <input type="text" name="subject" placeholder="Subject" value="Test Inquiry" required><br>
        <textarea name="message" required>This is a test message</textarea><br>
        <button type="submit">Test Submit</button>
    </form>
</body>
</html>