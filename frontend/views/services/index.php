<?php
$pageTitle = "Our Services";
$pageSpecificCSS = "services.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Services Hero -->
<section class="page-hero services-hero">
    <div class="container">
        <h1>Our <span>Services</span></h1>
        <p>Comprehensive IT solutions tailored to your business needs</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Services Main Section -->
<section class="services-main">
    <div class="container">
        <div class="section-intro">
            <h2>IT Solutions <span>We Offer</span></h2>
            <p>We provide a wide range of professional IT services to keep your business running smoothly and securely. Our team of experts is ready to help with all your technology needs.</p>
        </div>
        
        <div class="services-grid">
            <!-- Computer Repair Service -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-laptop-medical"></i>
                </div>
                <h3>Computer Repair</h3>
                <p>Fast and reliable repair services for all your computer hardware and software issues.</p>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/services/computer-repair" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                <div class="service-hover">
                    <h4>Computer Repair Services</h4>
                    <ul>
                        <li>Hardware diagnostics and repair</li>
                        <li>Virus and malware removal</li>
                        <li>Operating system installation</li>
                        <li>Performance optimization</li>
                        <li>Data backup and transfer</li>
                        <li>Component upgrades</li>
                    </ul>
                </div>
            </div>
            
            <!-- Cyber Security Service -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Cyber Security</h3>
                <p>Protect your business from cyber threats with our comprehensive security solutions.</p>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/services/cyber-security" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                <div class="service-hover">
                    <h4>Cyber Security Services</h4>
                    <ul>
                        <li>Vulnerability assessments</li>
                        <li>Firewall configuration</li>
                        <li>Security awareness training</li>
                        <li>Incident response</li>
                        <li>Penetration testing</li>
                        <li>Security policy development</li>
                    </ul>
                </div>
            </div>
            
            <!-- Network Solutions Service -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>Network Solutions</h3>
                <p>Design, implementation, and maintenance of secure and efficient network infrastructures.</p>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/services/network-solutions" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                <div class="service-hover">
                    <h4>Network Services</h4>
                    <ul>
                        <li>Network design and setup</li>
                        <li>Wireless network solutions</li>
                        <li>VPN setup</li>
                        <li>Network monitoring</li>
                        <li>Server configuration</li>
                        <li>Cloud integration</li>
                    </ul>
                </div>
            </div>
            
            <!-- Data Recovery Service -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Data Recovery</h3>
                <p>Expert data recovery services for all types of storage devices and failure scenarios.</p>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/services/data-recovery" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                <div class="service-hover">
                    <h4>Data Recovery Services</h4>
                    <ul>
                        <li>Hard drive recovery</li>
                        <li>SSD recovery</li>
                        <li>RAID recovery</li>
                        <li>Corrupted file repair</li>
                        <li>Accidental deletion recovery</li>
                        <li>Backup system implementation</li>
                    </ul>
                </div>
            </div>
            
            <!-- Web Development Service -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Custom website development and web application solutions for your business.</p>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/services/web-development" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                <div class="service-hover">
                    <h4>Web Development Services</h4>
                    <ul>
                        <li>Custom website design</li>
                        <li>E-commerce solutions</li>
                        <li>Content management systems</li>
                        <li>Web application development</li>
                        <li>Responsive design</li>
                        <li>SEO optimization</li>
                    </ul>
                </div>
            </div>
            
            <!-- IT Consulting Service -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>IT Consulting</h3>
                <p>Strategic IT consulting to align technology with your business goals.</p>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/services/it-consulting" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                <div class="service-hover">
                    <h4>IT Consulting Services</h4>
                    <ul>
                        <li>Technology strategy</li>
                        <li>System architecture</li>
                        <li>Cloud migration</li>
                        <li>Digital transformation</li>
                        <li>IT infrastructure planning</li>
                        <li>Cost optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Process Section -->
<section class="service-process">
    <div class="container">
        <h2 class="section-title">Our <span>Process</span></h2>
        
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <h3>Consultation</h3>
                <p>We discuss your needs and assess your current setup.</p>
            </div>
            
            <div class="process-step">
                <div class="step-number">2</div>
                <h3>Solution Design</h3>
                <p>We create a customized plan to address your requirements.</p>
            </div>
            
            <div class="process-step">
                <div class="step-number">3</div>
                <h3>Implementation</h3>
                <p>Our team executes the solution with minimal disruption.</p>
            </div>
            
            <div class="process-step">
                <div class="step-number">4</div>
                <h3>Ongoing Support</h3>
                <p>We provide continuous maintenance and support.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Enhance Your IT Infrastructure?</h2>
            <p>Contact us today for a free consultation and let us show you how we can help your business thrive in the digital world.</p>
            <div class="cta-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-primary">Get in Touch</a>
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>