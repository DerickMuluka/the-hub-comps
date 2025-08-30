<?php
// Get the service slug from URL
$slug = 'web-development';
$serviceData = [
    'title' => 'Web Development',
    'description' => 'Custom website development and web application solutions tailored to your business needs. We create responsive, secure, and high-performing websites that drive engagement and conversions.',
    'image' => '/frontend/assets/images/services/web-development.jpg',
    'features' => [
        'Custom website design and development',
        'E-commerce solutions with secure payment integration',
        'Content management systems (WordPress, Joomla, etc.)',
        'Web application development',
        'Mobile-responsive design',
        'SEO optimization',
        'Database integration',
        'API development and integration'
    ],
    'process' => [
        'Consultation: We discuss your requirements and goals',
        'Planning: We create a project roadmap and sitemap',
        'Design: You review and approve the website mockups',
        'Development: We build your website with clean code',
        'Testing: We ensure everything works perfectly',
        'Launch: We deploy your website and provide training'
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
                <p>In today's digital world, your website is often the first impression customers have of your business. We create websites that not only look great but also perform exceptionally, with fast load times, intuitive navigation, and mobile responsiveness that converts visitors into customers.</p>
                
                <div class="service-features">
                    <h3>Key Features</h3>
                    <ul>
                        <?php foreach ($serviceData['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="service-process">
                    <h3>Our Development Process</h3>
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
                    <h3>Common Web Development Questions</h3>
                    <div class="faq-item">
                        <h4>How long does it take to develop a website?</h4>
                        <p>The timeline depends on the complexity of your project. A basic brochure website typically takes 4-6 weeks, while e-commerce sites or custom web applications may take 8-12 weeks or more.</p>
                    </div>
                    <div class="faq-item">
                        <h4>Will my website be mobile-friendly?</h4>
                        <p>Absolutely. All our websites are built with responsive design principles, ensuring they look and function perfectly on all devices from desktops to smartphones.</p>
                    </div>
                    <div class="faq-item">
                        <h4>Do you provide website maintenance after launch?</h4>
                        <p>Yes, we offer various maintenance packages to keep your website secure, updated, and performing at its best. This includes security updates, content updates, and performance monitoring.</p>
                    </div>
                </div>
            </div>
            
            <div class="service-sidebar">
                <div class="service-card">
                    <h3>Ready to Build Your Website?</h3>
                    <p>Let's discuss your project and create a solution that meets your business goals.</p>
                    
                    <div class="service-actions">
                        <a href="/contact?service=<?php echo $slug; ?>" class="btn btn-primary btn-block">Get Started</a>
                        <a href="tel:+254705444447" class="btn btn-outline btn-block">
                            <i class="fas fa-phone"></i> Call for Consultation
                        </a>
                    </div>
                    
                    <div class="service-details">
                        <h4>Service Details</h4>
                        <ul>
                            <li><strong>Technologies:</strong> HTML5, CSS3, JavaScript, PHP, MySQL</li>
                            <li><strong>Frameworks:</strong> React, Angular, Laravel, Node.js</li>
                            <li><strong>E-commerce:</strong> WooCommerce, Shopify, Magento</li>
                            <li><strong>Support:</strong> 24/7 technical support available</li>
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
                        <p>"The team built our e-commerce site that increased our online sales by 300% in just 3 months. Their attention to detail and user experience is exceptional."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="/frontend/assets/images/team/client2.jpg" alt="Sarah Johnson">
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Owner, Fashion Boutique</p>
                        </div>
                    </div>
                </div>
                
                <div class="data-types">
                    <h4>We Develop:</h4>
                    <ul class="data-type-list">
                        <li><i class="fas fa-check-circle"></i> Business Websites</li>
                        <li><i class="fas fa-check-circle"></i> E-commerce Stores</li>
                        <li><i class="fas fa-check-circle"></i> Web Applications</li>
                        <li><i class="fas fa-check-circle"></i> Portfolio Sites</li>
                        <li><i class="fas fa-check-circle"></i> Membership Sites</li>
                        <li><i class="fas fa-check-circle"></i> Custom CMS Solutions</li>
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
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Services</h3>
                    <p>Improve your website's visibility and ranking on search engines.</p>
                    <a href="/services/seo" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="service-hover">
                        <h4>SEO Services</h4>
                        <ul>
                            <li>Keyword research</li>
                            <li>On-page optimization</li>
                            <li>Technical SEO</li>
                            <li>Content strategy</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>Extend your digital presence with custom mobile applications.</p>
                    <a href="/services/mobile-apps" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                    <div class="service-hover">
                        <h4>App Development</h4>
                        <ul>
                            <li>iOS app development</li>
                            <li>Android app development</li>
                            <li>Cross-platform apps</li>
                            <li>App maintenance</li>
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
            <h2>Ready to Launch Your Website?</h2>
            <p>Let's create a digital presence that grows your business and impresses your customers.</p>
            <div class="cta-btns">
                <a href="/contact?service=<?php echo $slug; ?>" class="btn btn-primary">Start Your Project</a>
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Get a Free Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
