<?php
$pageTitle = "Cyber Security Services";
$pageSpecificCSS = "service-details.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Service Hero -->
<section class="page-hero service-hero cyber-security-hero">
    <div class="container">
        <h1>Cyber <span>Security</span> Services</h1>
        <p>Protect your business from evolving cyber threats with our comprehensive security solutions</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Service Details -->
<section class="service-details">
    <div class="container">
        <div class="service-content">
            <div class="service-description">
                <h2>Complete Cyber Security Protection</h2>
                <p>In today's digital landscape, cyber threats are constantly evolving. Our cyber security services provide multi-layered protection for your business, ensuring your data, systems, and reputation remain secure.</p>
                
                <div class="service-features">
                    <div class="feature">
                        <i class="fas fa-search"></i>
                        <h3>Vulnerability Assessments</h3>
                        <p>Identify weaknesses in your systems before attackers can exploit them.</p>
                    </div>
                    
                    <div class="feature">
                        <i class="fas fa-fire"></i>
                        <h3>Firewall Configuration</h3>
                        <p>Properly configured firewalls to block unauthorized access.</p>
                    </div>
                    
                    <div class="feature">
                        <i class="fas fa-user-shield"></i>
                        <h3>Security Awareness Training</h3>
                        <p>Educate your staff to recognize and avoid security threats.</p>
                    </div>
                    
                    <div class="feature">
                        <i class="fas fa-first-aid"></i>
                        <h3>Incident Response</h3>
                        <p>Rapid response and recovery in case of security breaches.</p>
                    </div>
                </div>
                
                <h3>Our Cyber Security Approach</h3>
                <div class="security-approach">
                    <div class="approach-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Assessment</h4>
                            <p>We conduct a thorough evaluation of your current security posture.</p>
                        </div>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Strategy</h4>
                            <p>Develop a customized security strategy based on your risks.</p>
                        </div>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Implementation</h4>
                            <p>Deploy the right security tools and configurations.</p>
                        </div>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Monitoring</h4>
                            <p>Continuous monitoring and threat detection.</p>
                        </div>
                    </div>
                    
                    <div class="approach-step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h4>Maintenance</h4>
                            <p>Regular updates and security patches.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-sidebar">
                <div class="service-card">
                    <h3>Security Services</h3>
                    <ul class="service-list">
                        <li>Network Security Audits</li>
                        <li>Penetration Testing</li>
                        <li>Endpoint Protection</li>
                        <li>Email Security</li>
                        <li>Web Application Security</li>
                        <li>Security Policy Development</li>
                        <li>Compliance Assistance</li>
                        <li>Security Awareness Training</li>
                        <li>Incident Response Planning</li>
                        <li>24/7 Security Monitoring</li>
                    </ul>
                    
                    <div class="pricing-info">
                        <h4>Starting From:</h4>
                        <p class="price">Ksh.25,000</p>
                        <p>*Price varies based on business size and needs</p>
                    </div>
                    
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?service=cyber-security" class="btn btn-primary">Get Security Assessment</a>
                </div>
            </div>
        </div>
        
        <div class="service-faq">
            <h3>Cyber Security FAQs</h3>
            
            <div class="faq-item">
                <button class="faq-question">How often should we conduct security assessments?</button>
                <div class="faq-answer">
                    <p>We recommend quarterly assessments for most businesses, with monthly scans for high-risk environments. After any major system changes, an additional assessment should be performed.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">What compliance standards do you support?</button>
                <div class="faq-answer">
                    <p>We assist with various compliance frameworks including GDPR, HIPAA, PCI-DSS, and Kenya's Data Protection Act. Our team stays updated on all relevant regulations.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Do you provide managed security services?</button>
                <div class="faq-answer">
                    <p>Yes, we offer fully managed security services including 24/7 monitoring, threat detection, and response. This is ideal for businesses without dedicated IT security staff.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">How quickly can you respond to a security breach?</button>
                <div class="faq-answer">
                    <p>Our response time depends on your service level agreement. For premium clients, we guarantee a response within 1 hour of breach notification, 24/7.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Secure Your Business Today</h2>
            <p>Don't wait until it's too late. Protect your business from cyber threats with our expert security services.</p>
            <div class="cta-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?service=cyber-security" class="btn btn-primary">Get Security Assessment</a>
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
