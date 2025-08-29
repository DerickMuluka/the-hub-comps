<?php
// Enable error reporting for debugging (disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize variables
$success_message = '';
$error_message = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    
    // If validation passed, send email
    if ($validation_passed) {
        // Determine if we're in local development or production
        $isLocal = ($_SERVER['HTTP_HOST'] == 'localhost' || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false);
        
        if ($isLocal) {
            // LOCAL DEVELOPMENT: Use FormSubmit.co as a fallback
            $formsubmit_url = "https://formsubmit.co/ajax/greatdev39@gmail.com";
            
            $postData = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message_content,
                '_subject' => "New Contact Form Submission: $subject",
                '_template' => 'table'
            ];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $formsubmit_url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Only for testing
            
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            if ($httpCode == 200) {
                $success_message = "Your message has been sent successfully! We'll get back to you soon.";
            } else {
                $error_message = "Sorry, there was an error sending your message. Please try again later.";
                error_log("FormSubmit.co error: HTTP $httpCode - $response");
            }
        } else {
            // PRODUCTION: Use PHPMailer with SMTP
            // Load email configuration
            $config_path = __DIR__ . '/../config/email-config.php';
            
            if (file_exists($config_path)) {
                require_once $config_path;
            } else {
                $error_message = "Configuration error. Please try again later.";
                $validation_passed = false;
                error_log("Email config not found at: " . $config_path);
            }
            
            if ($validation_passed) {
                // Load Composer's autoloader
                $vendor_path = __DIR__ . '/../vendor/autoload.php';
                
                if (file_exists($vendor_path)) {
                    require_once $vendor_path;
                } else {
                    $error_message = "System error. Please try again later.";
                    $validation_passed = false;
                    error_log("Vendor autoload not found at: " . $vendor_path);
                }
            }
            
            if ($validation_passed) {
                // Create PHPMailer instance
                try {
                    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                    
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host = SMTP_HOST;
                    $mail->SMTPAuth = true;
                    $mail->Username = SMTP_USERNAME;
                    $mail->Password = SMTP_PASSWORD;
                    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = SMTP_PORT;
                    $mail->SMTPDebug = 0; // Disable debug output in production
                    
                    // Recipients
                    $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
                    $mail->addAddress(SMTP_USERNAME, 'The Hub Computers');
                    $mail->addReplyTo($email, $name);
                    
                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = "Website Contact Form: $subject";
                    
                    // HTML email body
                    $mail->Body = "
                        <h2>New Contact Form Submission</h2>
                        <p><strong>Name:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Phone:</strong> " . ($phone ? $phone : "Not provided") . "</p>
                        <p><strong>Subject:</strong> $subject</p>
                        <p><strong>Message:</strong></p>
                        <div style=\"background: #f9f9f9; padding: 15px; border-left: 4px solid #007bff;\">
                            " . nl2br($message_content) . "
                        </div>
                        <br>
                        <p><em>This message was sent from the contact form on The Hub Computers website.</em></p>
                    ";
                    
                    // Plain text version for non-HTML email clients
                    $mail->AltBody = "
                        New Contact Form Submission
                        
                        Name: $name
                        Email: $email
                        Phone: " . ($phone ? $phone : "Not provided") . "
                        Subject: $subject
                        
                        Message:
                        $message_content
                        
                        This message was sent from the contact form on The Hub Computers website.
                    ";
                    
                    // Send email
                    if ($mail->send()) {
                        $success_message = "Your message has been sent successfully! We'll get back to you soon.";
                    } else {
                        $error_message = "Sorry, there was an error sending your message. Please try again later.";
                        error_log("Email error: " . $mail->ErrorInfo);
                    }
                } catch (Exception $e) {
                    $error_message = "Message could not be sent. Please try again later.";
                    error_log("Email exception: " . $e->getMessage());
                }
            }
        }
    }
}

$pageTitle = "Contact Us";
$pageSpecificCSS = "contact.css";
$pageSpecificJS = "form-validation.js";
include __DIR__ . '/../partials/header.php';
?>

<section class="page-hero contact-hero">
    <div class="container">
        <h1>Contact <span>Us</span></h1>
        <p>Get in touch with our team for inquiries, support, or consultations</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<section class="contact-main">
    <div class="container">
        <!-- Display success/error messages -->
        <?php if (isset($success_message) && !empty($success_message)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($error_message) && !empty($error_message)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
        
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p>Fill out the form or reach out to us directly using the contact details below.</p>
                
                <div class="contact-details">
                    <div class="contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Address</h4>
                            <p>AIRPORT ROAD OFF MKOMANI JUNCTION NEAR BOMU HOSPITAL, Mombasa</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p>+254 705 444 447</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>info.thehubcomps@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Working Hours</h4>
                            <p>Monday - Friday: 8AM - 9PM</p>
                            <p>Saturday & Sunday: 10AM - 9PM</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" required 
                               value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required 
                               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number (Optional)</label>
                        <input type="tel" id="phone" name="phone" class="form-control" 
                               value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" class="form-control" required>
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
                        <textarea id="message" name="message" class="form-control" rows="5" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" id="submitBtn">Send Message</button>
                </form>
            </div>
        </div>
        
        <div class="contact-map" style="width:100%; height:400px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127389.42929519967!2d39.55858842867582!极速3d-4.0370250372938575!2m3!1f0!2f0!3f0!3m极速2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18406d4972cf4e2d%3A0x39a62f189e2e0c40!2sTHE%20HUB%20COMPUTERS%20-%20MOMBASA!5e0!3m2!1sen!2ske!4v1693678838353!5m2!1sen!2ske" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>