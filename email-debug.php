<?php
// Simple script to debug email issues
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>Email Configuration Debug</h2>";

// Check PHP version
echo "<p>PHP Version: " . phpversion() . "</p>";

// Check if openssl is enabled (required for TLS)
echo "<p>OpenSSL Enabled: " . (extension_loaded('openssl') ? 'Yes' : 'No') . "</p>";

// Check file paths
$paths = [
    'Vendor Autoload (Contact Form Path)' => __DIR__ . '/../../vendor/autoload.php',
    'Vendor Autoload (Test Path)' => __DIR__ . '/vendor/autoload.php',
    'Email Config (Contact Form Path)' => __DIR__ . '/../../config/email-config.php',
    'Email Config (Test Path)' => __DIR__ . '/config/email-config.php'
];

foreach ($paths as $label => $path) {
    $exists = file_exists($path);
    $color = $exists ? 'green' : 'red';
    echo "<p style='color: $color;'>$label: $path - " . ($exists ? 'Exists' : 'Does not exist') . "</p>";
}

// Try to load PHPMailer manually if autoload fails
if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
    echo "<p style='color: orange;'>PHPMailer not loaded via autoload. Trying manual include...</p>";
    
    $phpmailerPath = __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    if (file_exists($phpmailerPath)) {
        require_once $phpmailerPath;
        require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';
        require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
        echo "<p style='color: green;'>✓ PHPMailer loaded manually</p>";
    } else {
        echo "<p style='color: red;'>✗ Could not load PHPMailer manually either</p>";
    }
} else {
    echo "<p style='color: green;'>✓ PHPMailer class is available</p>";
}

// Check if we can connect to Gmail's SMTP server
echo "<h3>Testing SMTP Connection to Gmail</h3>";
$host = 'smtp.gmail.com';
$port = 587;
$timeout = 10;

$fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
if ($fp) {
    echo "<p style='color: green;'>✓ Can connect to $host on port $port</p>";
    fclose($fp);
} else {
    echo "<p style='color: red;'>✗ Cannot connect to $host on port $port: $errstr ($errno)</p>";
    echo "<p>This could be a firewall issue or your hosting provider might be blocking outbound SMTP connections.</p>";
}
?>