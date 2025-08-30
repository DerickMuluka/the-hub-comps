<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Debug - The Hub Computers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, #0062cc 0%, #0095ff 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 0 0 10px 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .debug-panel {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .debug-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .debug-title {
            font-size: 1.5rem;
            color: #0062cc;
        }
        
        .status-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
        }
        
        .status-active {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-inactive {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .debug-content {
            margin-bottom: 20px;
        }
        
        .debug-section {
            margin-bottom: 25px;
        }
        
        .section-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #0062cc;
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
        }
        
        pre {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            border-left: 4px solid #0062cc;
            font-family: 'Courier New', monospace;
            white-space: pre-wrap;
        }
        
        .form-container {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        button {
            background: linear-gradient(135deg, #0062cc 0%, #0095ff 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .info-box {
            background-color: #e7f3ff;
            border-left: 4px solid #0062cc;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        
        .info-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: #0062cc;
        }
        
        .solution-section {
            background-color: #fffae6;
            border-left: 4px solid #ffc107;
            padding: 20px;
            margin: 30px 0;
            border-radius: 4px;
        }
        
        .solution-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: #856404;
        }
        
        .solution-list {
            padding-left: 20px;
        }
        
        .solution-list li {
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            header {
                padding: 25px 15px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Form Debugging</h1>
            <p class="subtitle">Identifying why emails aren't being delivered</p>
        </div>
    </header>
    
    <div class="container">
        <div class="debug-panel">
            <div class="debug-header">
                <h2 class="debug-title">Debug Information</h2>
                <span class="status-badge status-active">DEBUG MODE ACTIVE</span>
            </div>
            
            <div class="debug-content">
                <?php
                // Enable error reporting for debugging
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                
                // Process form submission
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo '<div class="debug-section">';
                    echo '<h3 class="section-title">Form Data Received</h3>';
                    echo '<pre>';
                    print_r($_POST);
                    echo '</pre>';
                    echo '</div>';
                    
                    // Collect and sanitize form data
                    $name = htmlspecialchars(trim($_POST['name']));
                    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
                    $phone = htmlspecialchars(trim($_POST['phone']));
                    $subject = htmlspecialchars(trim($_POST['subject']));
                    $message_content = htmlspecialchars(trim($_POST['message']));
                    
                    // Validate required fields
                    $validation_passed = true;
                    $error_message = "";
                    
                    if (empty($name)) {
                        $validation_passed = false;
                        $error_message = "Please enter your name.";
                    } elseif (empty($email)) {
                        $validation_passed = false;
                        $error_message = "Please enter your email address.";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $validation_passed = false;
                        $error_message = "Invalid email format.";
                    } elseif (empty($subject)) {
                        $validation_passed = false;
                        $error_message = "Please select a subject.";
                    } elseif (empty($message_content)) {
                        $validation_passed = false;
                        $error_message = "Please enter your message.";
                    }
                    
                    // If validation passed, simulate email sending
                    if ($validation_passed) {
                        echo '<div class="alert alert-success">Form validation passed. Ready to send email.</div>';
                        
                        // Simulate email configuration check
                        echo '<div class="debug-section">';
                        echo '<h3 class="section-title">Email Configuration Simulation</h3>';
                        
                        // Simulate PHPMailer setup
                        echo '<p>PHPMailer would be initialized here...</p>';
                        echo '<p>SMTP settings would be configured...</p>';
                        echo '<p>Email content would be prepared...</p>';
                        
                        // Show what would be sent
                        echo '<h4 class="section-title">Email Content Preview</h4>';
                        echo '<pre>';
                        echo "To: greatdev39@gmail.com\n";
                        echo "From: $email\n";
                        echo "Subject: Website Contact Form: $subject\n\n";
                        echo "Name: $name\n";
                        echo "Email: $email\n";
                        echo "Phone: " . ($phone ? $phone : "Not provided") . "\n";
                        echo "Subject: $subject\n";
                        echo "Message:\n$message_content\n";
                        echo '</pre>';
                        
                        echo '</div>';
                        
                        // Simulate sending process
                        echo '<div class="debug-section">';
                        echo '<h3 class="section-title">Email Sending Simulation</h3>';
                        echo '<p>Connection to SMTP server would be established...</p>';
                        echo '<p>Authentication would occur...</p>';
                        echo '<p>Email would be transmitted...</p>';
                        echo '</div>';
                        
                        // Show success message
                        echo '<div class="alert alert-success">Email would have been sent successfully in production environment.</div>';
                        
                    } else {
                        echo '<div class="alert alert-danger">Validation failed: ' . $error_message . '</div>';
                    }
                } else {
                    echo '<p>No form submission detected. Please fill out and submit the form below.</p>';
                }
                ?>
            </div>
        </div>
        
        <div class="info-box">
            <h3 class="info-title">Debugging Information</h3>
            <p>This debug interface shows what happens when you submit the form. In a live environment, we would test:</p>
            <ul>
                <li>Form validation and data sanitization</li>
                <li>PHPMailer initialization and configuration</li>
                <li>SMTP connection and authentication</li>
                <li>Email content preparation</li>
                <li>Actual email transmission</li>
            </ul>
        </div>
        
        <div class="form-container">
            <h2>Test Contact Form</h2>
            <p>Submit this form to see the debugging information</p>
            
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number (Optional)</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" required>
                        <option value="">Select a subject</option>
                        <option value="General Inquiry" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'General Inquiry') ? 'selected' : ''; ?>>General Inquiry</option>
                        <option value="Service Request" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Service Request') ? 'selected' : ''; ?>>Service Request</option>
                        <option value="Course Inquiry" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Course Inquiry') ? 'selected' : ''; ?>>Course Inquiry</option>
                        <option value="Support" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Support') ? 'selected' : ''; ?>>Support</option>
                        <option value="Other" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                </div>
                
                <button type="submit">Send Test Message</button>
            </form>
        </div>
        
        <div class="solution-section">
            <h3 class="solution-title">Common Solutions for Email Delivery Issues</h3>
            <ol class="solution-list">
                <li><strong>Check SMTP Configuration:</strong> Verify your SMTP settings in email-config.php</li>
                <li><strong>Server Compatibility:</strong> Ensure your hosting provider allows outgoing SMTP connections</li>
                <li><strong>Authentication:</strong> Verify your email credentials are correct</li>
                <li><strong>PHPMailer Version:</strong> Make sure you're using a compatible version of PHPMailer</li>
                <li><strong>Spam Filters:</strong> Check if emails are being flagged as spam</li>
                <li><strong>Error Logging:</strong> Check your server's error logs for specific issues</li>
            </ol>
        </div>
    </div>
</body>
</html>