<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>Local Email Test (Using mail() function as fallback)</h2>";

// Simulate form data
$name = "Test User";
$email = "test@example.com";
$phone = "123-456-7890";
$subject = "Test Inquiry";
$message_content = "This is a test message to verify the contact form is working.";

// Create email content
$email_subject = "Website Contact Form: $subject";
$email_body = "
New Contact Form Submission

Name: $name
Email: $email
Phone: $phone
Subject: $subject

Message:
$message_content

This message was sent from the contact form on The Hub Computers website.
";

$email_headers = "From: greatdev39@gmail.com\r\n";
$email_headers .= "Reply-To: $email\r\n";
$email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Try to send email using mail() function
if (mail('greatdev39@gmail.com', $email_subject, $email_body, $email_headers)) {
    echo "<p style='color: green; font-weight: bold;'>✓ Test email sent successfully using mail() function!</p>";
    echo "<p>Note: This uses PHP's mail() function instead of SMTP. Check your spam folder if you don't see it.</p>";
} else {
    echo "<p style='color: red;'>✗ Email could not be sent using mail() function.</p>";
    echo "<p>Your local server may not be configured to send emails.</p>";
}

// Show what would be sent
echo "<h3>Email Content That Would Be Sent:</h3>";
echo "<pre>To: greatdev39@gmail.com\nSubject: $email_subject\n\n$email_body</pre>";

echo "<h3>Next Steps:</h3>";
echo "<ol>
<li>Check if your XAMPP server can send emails (check spam folder)</li>
<li>Ensure your internet connection is working</li>
<li>Try using a different SMTP service like SendGrid if Gmail continues to have issues</li>
<li>Consider using a form submission service like FormSubmit.co as an alternative</li>
</ol>";

// Test form validation
echo "<h3>Form Validation Test</h3>";
echo "<form method='POST' action=''>
    <input type='text' name='name' value='Test User' placeholder='Name'><br>
    <input type='email' name='email' value='test@example.com' placeholder='Email'><br>
    <input type='text' name='phone' value='123-456-7890' placeholder='Phone'><br>
    <input type='text' name='subject' value='Test Subject' placeholder='Subject'><br>
    <textarea name='message'>Test message content</textarea><br>
    <button type='submit'>Test Form Submission</button>
</form>";
?>