<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hub Computers and Cyber Services - <?php echo $pageTitle ?? 'Home'; ?></title>
    <meta name="description" content="Professional computer repair, cyber security services, IT solutions, and computer training courses">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/logos/hub-logo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/css/responsive.css">
    <?php if (isset($pageSpecificCSS)): ?>
    <link rel="stylesheet" href="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/css/<?php echo $pageSpecificCSS; ?>">
    <?php endif; ?>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- WhatsApp Floating Button -->
    <?php include __DIR__ . '/whatsapp-chat.php'; ?>
    
    <!-- Header Section -->
    <header class="main-header">
        <div class="container">
            <div class="logo-container">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/logos/hub-logo.png" alt="The Hub Computers and Cyber Services Logo" class="logo">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="main-navigation">
                <?php include __DIR__ . '/navigation.php'; ?>
            </nav>
            
            <div class="header-cta">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-primary">Get a Quote</a>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses" class="btn btn-outline">View Courses</a>
            </div>
            
            <button class="mobile-menu-toggle" aria-label="Toggle navigation menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    
    <!-- Mobile Navigation -->
    <div class="mobile-overlay"></div>
    <nav class="mobile-navigation">
        <div class="mobile-nav-header">
            <a href="<?php echo BASE_URL . APP_ROOT; ?>/">
                <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/logos/hub-logo.png" alt="The Hub Logo" class="mobile-logo">
            </a>
            <button class="mobile-menu-close" aria-label="Close navigation menu">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <?php include __DIR__ . '/navigation.php'; ?>
        <div class="mobile-nav-footer">
            <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-primary btn-block">Get a Quote</a>
            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses" class="btn btn-outline btn-block">View Courses</a>
        </div>
    </nav>