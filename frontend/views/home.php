<?php
$pageTitle = "Home";
$pageSpecificCSS = "home.css";
include __DIR__ . '/../partials/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content animate__animated animate__fadeIn">
            <h1>Your Trusted Partner in <span>Computer & Cyber Services</span></h1>
            <p>Comprehensive IT solutions and professional training to keep your business secure and running smoothly.</p>
            <div class="hero-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/services" class="btn btn-primary <?php echo strpos($_SERVER['REQUEST_URI'], 'services') !== false ? 'active' : '' ?>">Our Services</a>
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses" class="btn btn-secondary <?php echo strpos($_SERVER['REQUEST_URI'], 'courses') !== false ? 'active' : '' ?>">View Courses</a>
            </div>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Services Preview Section -->
<section class="services-preview">
    <div class="container">
        <h2 class="section-title">Our <span>Services</span></h2>
        <p class="section-subtitle">We offer a wide range of IT solutions tailored to your needs</p>
        
        <div class="services-grid">
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
                        <li>Plotter and large-format printer servicing</li>
                    </ul>
                </div>
            </div>
            
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
                        <li>Vulnerability assessments and penetration testing</li>
                        <li>Advanced firewall and endpoint protection</li>
                        <li>Dark web monitoring and threat intelligence</li>
                        <li>Security awareness training</li>
                        <li>Incident response and digital forensics</li>
                    </ul>
                </div>
            </div>
            
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
                        <li>Enterprise network design and setup</li>
                        <li>Wireless network solutions with zero-trust architecture</li>
                        <li>SD-WAN and VPN setup</li>
                        <li>Network monitoring and SIEM integration</li>
                        <li>Cloud networking and hybrid infrastructure</li>
                    </ul>
                </div>
            </div>
            
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
                        <li>Hard drive and SSD recovery (including RAID arrays)</li>
                        <li>Forensic data recovery for legal cases</li>
                        <li>Corrupted file repair and database restoration</li>
                        <li>Encrypted data recovery</li>
                        <li>Backup system implementation</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="<?php echo BASE_URL . APP_ROOT; ?>/services" class="btn btn-outline">View All Services</a>
        </div>
    </div>
</section>

<!-- Courses Preview Section -->
<section class="courses-preview">
    <div class="container">
        <h2 class="section-title">Featured <span>Courses</span></h2>
        <p class="section-subtitle">Enhance your skills with our professional computer training programs</p>
        
        <div class="courses-filter">
            <button class="filter-btn active" data-filter="all">All Courses</button>
            <button class="filter-btn" data-filter="beginner">Beginner</button>
            <button class="filter-btn" data-filter="intermediate">Intermediate</button>
            <button class="filter-btn" data-filter="advanced">Advanced</button>
        </div>
        
        <div class="courses-grid">
            <div class="course-card" data-course="ms-office" data-level="beginner">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/ms-office-real.jpg" alt="MS Office Course">
                </div>
                <div class="course-info">
                    <h3>MS Office Package</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 4 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.6,000</span>
                    </div>
                    <p>Master Microsoft Word, Excel, PowerPoint, and Outlook for professional use.</p>
                    <button class="btn btn-primary course-details-btn">View Details</button>
                </div>
            </div>
            
            <div class="course-card" data-course="basic-computing" data-level="beginner">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/basic-computing-real.jpg" alt="Basic Computing Course">
                </div>
                <div class="course-info">
                    <h3>Basic Computing</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 6 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.6,000</span>
                    </div>
                    <p>Essential computer skills for beginners, including internet, email, and file management.</p>
                    <button class="btn btn-primary course-details-btn">View Details</button>
                </div>
            </div>
            
            <div class="course-card" data-course="cyber-security" data-level="intermediate">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/cyber-security-real.jpg" alt="Cyber Security Course">
                </div>
                <div class="course-info">
                    <h3>Cyber Security Basics</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 8 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.15,000</span>
                    </div>
                    <p>Learn how to protect yourself and your business from online threats and attacks.</p>
                    <button class="btn btn-primary course-details-btn">View Details</button>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses" class="btn btn-outline">View All Courses</a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <h2 class="section-title">Our <span>Process</span></h2>
        <p class="section-subtitle">How we deliver exceptional results for our clients</p>
        
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <h3>Consultation</h3>
                <p>We begin with a thorough needs assessment to understand your specific requirements and challenges.</p>
            </div>
            
            <div class="process-step">
                <div class="step-number">2</div>
                <h3>Solution Design</h3>
                <p>Our experts create a customized plan with clear objectives, timelines, and deliverables.</p>
            </div>
            
            <div class="process-step">
                <div class="step-number">3</div>
                <h3>Implementation</h3>
                <p>We execute the solution with minimal disruption to your operations, keeping you informed throughout.</p>
            </div>
            
            <div class="process-step">
                <div class="step-number">4</div>
                <h3>Testing & Review</h3>
                <p>Rigorous quality assurance ensures everything works perfectly before final delivery.</p>
            </div>
            
            <div class="process-step">
                <div class="step-number">5</div>
                <h3>Ongoing Support</h3>
                <p>We provide continuous monitoring, maintenance, and optimization for long-term success.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="container">
        <h2 class="section-title">What Our <span>Clients Say</span></h2>
        <p class="section-subtitle">Don't just take our word for it - hear from our satisfied customers</p>
        
        <div class="testimonials-slider">
            <div class="testimonial">
                <div class="testimonial-content">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"The Hub saved my business when our entire network went down. Their team was onsite within hours and had us back up and running with minimal downtime. Their cyber security recommendations have also protected us from several potential threats."</p>
                </div>
                <div class="testimonial-author">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/client1.jpg" alt="Sarah Johnson">
                    <div class="author-info">
                        <h4>Sarah Johnson</h4>
                        <p>CEO, TechSolutions Inc.</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial">
                <div class="testimonial-content">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>"I took the MS Office course at The Hub and it completely transformed how I work. The instructors were knowledgeable and patient. I now use Excel macros that save me hours every week!"</p>
                </div>
                <div class="testimonial-author">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/client2.jpg" alt="Michael Chen">
                    <div class="author-info">
                        <h4>Michael Chen</h4>
                        <p>Accountant</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial">
                <div class="testimonial-content">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"As a small business owner, I need IT support I can count on. The Hub has been our go-to for everything from setting up our office network to ongoing maintenance. Their team is knowledgeable and always available when we need them."</p>
                </div>
                <div class="testimonial-author">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/client3.jpg" alt="David Rodriguez">
                    <div class="author-info">
                        <h4>David Rodriguez</h4>
                        <p>Owner, Rodriguez & Co.</p>
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
            <h2>Ready to Transform Your IT Experience?</h2>
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

<script>
// Course filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.courses-filter .filter-btn');
    const courseCards = document.querySelectorAll('.course-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            // Filter courses
            courseCards.forEach(card => {
                if (filter === 'all' || card.dataset.level === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>
