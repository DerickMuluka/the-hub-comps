<?php
// Get the service slug from URL
$slug = $_GET['slug'] ?? '';
$serviceData = null;

// Sample service data - in a real app, this would come from a database
$services = [
    'computer-repair' => [
        'title' => 'Computer Repair',
        'description' => 'Our comprehensive computer repair services cover all aspects of hardware and software issues. Whether you\'re dealing with a slow computer, virus infections, or hardware failures, our certified technicians can diagnose and repair your device quickly and efficiently.',
        'features' => [
            'Hardware diagnostics and repair',
            'Virus and malware removal',
            'Operating system installation and upgrades',
            'Data backup and transfer',
            'Component upgrades (RAM, SSD, etc.)',
            'Laptop screen and keyboard replacement'
        ],
        'process' => [
            'Diagnosis: We identify the root cause of the problem',
            'Quote: You receive a transparent price estimate',
            'Approval: We proceed only after your confirmation',
            'Repair: Our technicians fix the issue',
            'Testing: We ensure everything works perfectly',
            'Delivery: Your device is returned in optimal condition'
        ]
    ],
    'cyber-security' => [
        'title' => 'Cyber Security',
        'description' => 'Protect your business from evolving cyber threats with our comprehensive security solutions. From vulnerability assessments to employee training, we provide layered protection tailored to your specific risks and compliance requirements.',
        'image' => '/frontend/assets/images/services/cyber-security.jpg',
        'features' => [
            'Security audits and risk assessments',
            'Firewall configuration and management',
            'Endpoint protection solutions',
            'Email security and phishing protection',
            'Security awareness training',
            'Incident response planning'
        ],
        'process' => [
            'Assessment: We evaluate your current security posture',
            'Recommendation: We propose tailored solutions',
            'Implementation: We deploy security measures',
            'Training: We educate your staff',
            'Monitoring: We watch for threats 24/7',
            'Maintenance: We keep defenses up-to-date'
        ]
    ],
    'network-solutions' => [
        'title' => 'Network Solutions',
        'description' => 'Design, implementation, and maintenance of secure and efficient network infrastructures. Whether you need a small office network or a complex enterprise setup, our network engineers can create a solution that meets your performance and security requirements.',
        'image' => '/frontend/assets/images/services/network-solutions.jpg',
        'features' => [
            'Network design and architecture',
            'Wired and wireless network installation',
            'VPN setup for remote access',
            'Network security configuration',
            'Cloud network integration',
            'Ongoing monitoring and maintenance'
        ],
        'process' => [
            'Consultation: We understand your needs',
            'Design: We create a network blueprint',
            'Approval: You review and approve the plan',
            'Implementation: We build the network',
            'Testing: We ensure optimal performance',
            'Support: We provide ongoing maintenance'
        ]
        ],
    'data-recovery' => [
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
        ],
    'web-development' => [
        'title' => 'Web Development',
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
    ]
];

// Find the requested service
if (array_key_exists($slug, $services)) {
    $serviceData = $services[$slug];
    $pageTitle = $serviceData['title'] . " Service";
} else {
    // Service not found - redirect or show 404
    header("Location: /services");
    exit();
}

$pageSpecificCSS = "services.css";

include __DIR__ . '/../../partials/header.php';
?>

<!-- Service Hero -->
<section class="page-hero service-hero" style="background-color: #2c3e50; color: #ffffff;">
    <div class="container">
        <h1><?php echo $serviceData['title']; ?> <span>Service</span></h1>
        <p><?php echo $serviceData['description']; ?></p>
    </div>
    <div class="hero-overlay" style="background-color: rgba(0, 0, 0, 0.3);"></div>
</section>

<!-- Service Main Section -->
<section class="service-detail">
    <div class="container">
        <div class="service-detail-grid">
            <div class="service-main-content">
                <h2>About Our <?php echo $serviceData['title']; ?> Service</h2>
                <p><?php echo $serviceData['description']; ?></p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul>
                        <?php foreach ($serviceData['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="service-process">
                    <h3>Our Process</h3>
                    <div class="process-steps">
                        <?php foreach ($serviceData['process'] as $index => $step): ?>
                        <div class="process-step">
                            <div class="step-number"><?php echo $index + 1; ?></div>
                            <p><?php echo $step; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="service-sidebar">
                <div class="service-card">
                    <h3>Get Started</h3>
                    <p>Ready to use our <?php echo $serviceData['title']; ?> service? Contact us today for a free consultation.</p>
                    
                    <div class="service-actions">
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-primary btn-block">Make an Enquiry</a>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-outline btn-block">Request Service</a>
                        <!--
                        <a href="tel:+254705444447" class="btn btn-outline btn-block">
                            <i class="fas fa-phone"></i> Call Now
                        </a>
                        -->
                    </div>
                    
                    <div class="service-details">
                        <h4>Service Details</h4>
                        <ul>
                            <li><strong>Availability:</strong> Business hours + emergency support</li>
                            <li><strong>Response Time:</strong> Within 4 hours for critical issues</li>
                            <li><strong>Coverage:</strong> On-site and remote options available</li>
                            <li><strong>Warranty:</strong> 90-day guarantee on all repairs</li>
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
                        <p>"The network solution they implemented for our office has been flawless. Our productivity has increased significantly."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="/frontend/assets/images/team/client1.jpg" alt="Sarah Chemasa">
                        <div class="author-info">
                            <h4>Sarah Chemasa</h4>
                            <p>CEO, TechSolutions Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="related-services">
            <h2>Related <span>Services</span></h2>
            <p>You might also be interested in these services</p>
            
            <div class="services-grid">
                <?php
                // Display related services (excluding current service)
                foreach ($services as $relatedSlug => $relatedService) {
                    if ($relatedSlug !== $slug) {
                        echo '
                        <div class="service-card">
                            <div class="service-icon" style="background-color: #3498db; color: #fff;">
                                <i class="fas fa-laptop-medical"></i>
                            </div>
                            <h3>'.$relatedService['title'].'</h3>
                            <p>'.substr($relatedService['description'], 0, 100).'...</p>
                            <a href="/services/'.$relatedSlug.'" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            <div class="service-hover">
                                <h4>'.$relatedService['title'].' Services</h4>
                                <ul>';
                                foreach (array_slice($relatedService['features'], 0, 4) as $feature) {
                                    echo '<li>'.$feature.'</li>';
                                }
                                echo '
                                </ul>
                            </div>
                        </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Need <?php echo $serviceData['title']; ?> Services?</h2>
            <p>Contact us today to discuss your specific needs and get a customized solution.</p>
            <div class="cta-btns">
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
