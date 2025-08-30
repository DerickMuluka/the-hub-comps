<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>Testing Email Configuration</h2>";

// Check if vendor autoload exists
$vendorAutoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($vendorAutoload)) {
    echo "<p style='color: green;'>✓ Vendor autoload.php found</p>";
    require_once $vendorAutoload;
} else {
    echo "<p style='color: red;'>✗ Vendor autoload.php not found at: $vendorAutoload</p>";
    // Try alternative path (for contact form structure)
    $vendorAutoloadAlt = __DIR__ . '/../vendor/autoload.php';
    if (file_exists($vendorAutoloadAlt)) {
        echo "<p style='color: green;'>✓ Vendor autoload.php found at alternative path: $vendorAutoloadAlt</p>";
        require_once $vendorAutoloadAlt;
    } else {
        echo "<p style='color: red;'>✗ Vendor autoload.php not found at alternative path either: $vendorAutoloadAlt</p>";
        exit;
    }
}

// Check if email config exists
$emailConfig = __DIR__ . '/config/email-config.php';
if (file_exists($emailConfig)) {
    echo "<p style='color: green;'>✓ Email config file found</p>";
    require_once $emailConfig;
} else {
    echo "<p style='color: red;'>✗ Email config file not found at: $emailConfig</p>";
    // Try alternative path (for contact form structure)
    $emailConfigAlt = __DIR__ . '/../config/email-config.php';
    if (file_exists($emailConfigAlt)) {
        echo "<p style='color: green;'>✓ Email config file found at alternative path: $emailConfigAlt</p>";
        require_once $emailConfigAlt;
    } else {
        echo "<p style='color: red;'>✗ Email config file not found at alternative path either: $emailConfigAlt</p>";
        exit;
    }
}

// Verify we can access the constants
if (defined('SMTP_HOST') && defined('SMTP_USERNAME')) {
    echo "<p style='color: green;'>✓ Email constants are defined</p>";
    echo "<p>SMTP Host: " . SMTP_HOST . "</p>";
    echo "<p>SMTP Username: " . SMTP_USERNAME . "</p>";
    // Don't show password for security
    echo "<p>SMTP Password: " . (defined('SMTP_PASSWORD') ? "Set" : "Not set") . "</p>";
} else {
    echo "<p style='color: red;'>✗ Email constants are not properly defined</p>";
    exit;
}

try {
    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    echo "<p style='color: green;'>✓ PHPMailer instantiated successfully</p>";
    
    // Server settings
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USERNAME;
    $mail->Password = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = SMTP_PORT;
    
    // For testing, enable verbose debug output
    $mail->SMTPDebug = 2; // Enable verbose debug output
    $mail->Debugoutput = function($str, $level) {
        echo "<p style='color: blue;'>Debug: $str</p>";
    };
    
    // Recipients
    $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
    $mail->addAddress(SMTP_USERNAME, 'Test Recipient');
    $mail->addReplyTo('test@example.com', 'Test User');
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from The Hub Computers';
    $mail->Body    = '<h1>Test Email</h1><p>This is a test email from The Hub Computers website. If you receive this, the email configuration is working correctly.</p>';
    $mail->AltBody = 'This is a test email from The Hub Computers website. If you receive this, the email configuration is working correctly.';
    
    echo "<p>Attempting to send test email...</p>";
    
    // Try to send the email
    if ($mail->send()) {
        echo "<p style='color: green; font-weight: bold;'>✓ Test email sent successfully! Please check your inbox.</p>";
    } else {
        echo "<p style='color: red;'>✗ Email could not be sent.</p>";
        echo "<p>Error: " . $mail->ErrorInfo . "</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>✗ Exception occurred: " . $e->getMessage() . "</p>";
}

// Test with a more realistic scenario (like the contact form)
echo "<h2>Testing Contact Form Simulation</h2>";

try {
    $mail2 = new PHPMailer\PHPMailer\PHPMailer(true);
    
    // Server settings (same as above)
    $mail2->isSMTP();
    $mail2->Host = SMTP_HOST;
    $mail2->SMTPAuth = true;
    $mail2->Username = SMTP_USERNAME;
    $mail2->Password = SMTP_PASSWORD;
    $mail2->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail2->Port = SMTP_PORT;
    $mail2->SMTPDebug = 2;
    $mail2->Debugoutput = function($str, $level) {
        echo "<p style='color: purple;'>Contact Form Debug: $str</p>";
    };
    
    // Simulate contact form data
    $test_name = "John Doe";
    $test_email = "test@example.com";
    $test_phone = "123-456-7890";
    $test_subject = "Test Inquiry";
    $test_message = "This is a test message from the contact form simulation.";
    
    // Recipients (like contact form)
    $mail2->setFrom(SMTP_FROM, SMTP_FROM_NAME);
    $mail2->addAddress(SMTP_USERNAME, 'The Hub Computers');
    $mail2->addReplyTo($test_email, $test_name);
    
    // Content (like contact form)
    $mail2->isHTML(true);
    $mail2->Subject = "Website Contact Form: $test_subject";
    
    $mail2->Body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $test_name</p>
        <p><strong>Email:</strong> $test_email</p>
        <p><strong>Phone:</strong> $test_phone</p>
        <p><strong>Subject:</strong> $test_subject</p>
        <p><strong>Message:</strong></p>
        <div style=\"background: #f9f9f9; padding: 15px; border-left: 4px solid #007bff;\">
            " . nl2br($test_message) . "
        </div>
        <br>
        <p><em>This is a test message from the contact form simulation.</em></p>
    ";
    
    $mail2->AltBody = "
        New Contact Form Submission (Test)
        
        Name: $test_name
        Email: $test_email
        Phone: $test_phone
        Subject: $test_subject
        
        Message:
        $test_message
        
        This is a test message from the contact form simulation.
    ";
    
    echo "<p>Attempting to send contact form simulation email...</p>";
    
    if ($mail2->send()) {
        echo "<p style='color: green; font-weight: bold;'>✓ Contact form simulation email sent successfully!</p>";
    } else {
        echo "<p style='color: red;'>✗ Contact form simulation email failed.</p>";
        echo "<p>Error: " . $mail2->ErrorInfo . "</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>✗ Exception occurred in contact form simulation: " . $e->getMessage() . "</p>";
}
?>