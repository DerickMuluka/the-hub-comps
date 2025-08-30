<?php
// Get the service slug from URL
$slug = 'data-recovery';
$serviceData = [
    'title' => 'Data Recovery',
    'description' => 'Expert data recovery services for all types of storage devices and failure scenarios. We can retrieve lost, deleted, or inaccessible data from hard drives, SSDs, USB drives, RAID arrays, and other storage media with the highest success rates in the industry.',
    'image' => '/frontend/assets/images/services/data-recovery.jpg',
    'features' => [
        'Hard drive recovery (HDD/SSD)',
        'RAID server recovery',
        'Corrupted file repair',
        'Accidental deletion recovery',
        'Formatted drive recovery',
        'Virus-damaged data recovery',
        'Operating system crash recovery',
        'Failed storage device recovery'
    ],
    'process' => [
        'Evaluation: We assess the damage and recovery options',
        'Quote: You receive a no-obligation price estimate',
        'Approval: We proceed only after your confirmation',
        'Recovery: Our experts work on retrieving your data',
        'Verification: You check the recovered files',
        'Delivery: We return your data on a new storage device'
    ]
];

$pageTitle = $serviceData['title'] . " Service";
$pageSpecificCSS = "services.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Service Hero -->
<section class="page-hero service-hero" style="background-image: url('<?php echo $serviceData['image']; ?>')">
    <div class="container">
        <h1><?php echo $serviceData['title']; ?> <span>Service</span></h1>
        <p><?php echo $serviceData['description']; ?></p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Service Main Section -->
<section class="service-detail">
    <div class="container">
        <div class="service-detail-grid">
            <div class="service-main-content">
                <h2>About Our <?php echo $serviceData['title']; ?> Service</h2>
                <p>When disaster strikes and you lose important files, our data recovery experts can help. We handle all types of data loss situations with specialized tools and techniques in our certified cleanroom environment.</p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul>
                        <?php foreach ($serviceData['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="service-process">
                    <h3>Our Recovery Process</h3>
                    <div class="process-steps">
                        <?php foreach ($serviceData['process'] as $index => $step): ?>
                        <div class="process-step">
                            <div class="step-number"><?php echo $index + 1; ?></div>
                            <p><?php echo $step; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="service-faq">
                    <h3>Common Data Recovery Questions</h3>
                    <div class="faq-item">
                        <h4>Can you recover data from a physically damaged drive?</h4>
                        <p>Yes, in most cases. We have specialized equipment to recover data from drives with physical damage like head crashes, motor failures, or water damage.</p>
                    </div>
                    <div class="faq-item">
                        <h4>How long does data recovery take?</h4>
                        <p>Simple cases may take 24-48 hours. Complex cases with physical damage may require 5-7 business days. We offer emergency services for critical situations.</p>
                    </div>
                    <div class="faq-item">
                        <h4>Is my data kept confidential?</h4>
                        <p>Absolutely. We sign NDAs if required and follow strict confidentiality protocols. Your data is never accessed or copied without your permission.</p>
                    </div>
                </div>
            </div>
            
            <div class="service-sidebar">
                <div class="service-card">
                    <h3>Need Data Recovery?</h3>
                    <p>Don't risk permanent data loss. Contact our recovery experts immediately.</p>
                    
                    <div class="service-actions">
                        <a href="/contact?service=<?php echo $slug; ?>" class="btn btn-primary btn-block">Start Recovery</a>
                        <a href="tel:+1234567890" class="btn btn-outline btn-block">
                            <i class="fas fa-phone"></i> Emergency Help
                        </a>
                    </div>
                    
                    <div class="service-details">
                        <h4>Service Details</h4>
                        <ul>
                            <li><strong>Success Rate:</strong> 95%+ for logical failures</li>
                            <li><strong>Cleanroom:</strong> Class 100 certified facility</li>
                            <li><strong>Devices:</strong> All brands and models</li>
                            <li><strong>Warranty:</strong> No recovery, no charge policy</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-testimonial">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"They recovered 5 years of accounting records from a failed RAID array that others said was unrecoverable. Saved our business!"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="/frontend/assets/images/team/client3.jpg" alt="Robert Williams">
                        <div class="author-info">
                            <h4>Robert Williams</h4>
                            <p>CFO, Williams & Co.</p>
                        </div>
                    </div>
                </div>
                
                <div class="data-types">
                    <h4>We Recover From:</h4>
                    <ul class="data-type-list">
                        <li><i class="fas fa-check-circle"></i> Hard Disk Drives (HDD)</li>
                        <li><i class="fas fa-check-circle"></i> Solid State Drives (SSD)</li>
                        <li><i class="fas fa-check-circle"></i> USB Flash Drives</li>
                        <li><i class="fas fa-check-circle"></i> Memory Cards</li>
                        <li><i class="fas fa-check-circle"></i> RAID Arrays</li>
                        <li><i class="fas fa-check-circle"></i> Servers</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="related-services">
            <h2>Related <span>Services</span></h2>
            <p>You might also be interested in these services</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-medical"></i>
                    </div>
                    <h3>Computer Repair</h3>
                    <p>Fast and reliable repair services for all your computer hardware and software issues.</p>
                    <a href="/services/computer-repair" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="service-hover">
                        <h4>Computer Repair Services</h4>
                        <ul>
                            <li>Hardware diagnostics and repair</li>
                            <li>Virus and malware removal</li>
                            <li>Operating system installation</li>
                            <li>Performance optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Backup Solutions</h3>
                    <p>Implement reliable backup systems to prevent future data loss scenarios.</p>
                    <a href="/services/backup-solutions" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="service-hover">
                        <h4>Backup Services</h4>
                        <ul>
                            <li>Automated backup systems</li>
                            <li>Cloud backup solutions</li>
                            <li>Disaster recovery planning</li>
                            <li>Backup verification</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Emergency Data Recovery?</h2>
            <p>Time is critical when dealing with data loss. Contact us immediately for the best chance of recovery.</p>
            <div class="cta-btns">
                <a href="/contact?service=<?php echo $slug; ?>" class="btn btn-primary">Start Recovery Now</a>
                <a href="tel:+1234567890" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> 24/7 Emergency Line
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
