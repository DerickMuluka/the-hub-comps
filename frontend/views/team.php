<?php
$pageTitle = "Our Team";
$pageSpecificCSS = "team.css";
include __DIR__ . '/../partials/header.php';
?>

<!-- Team Hero -->
<section class="page-hero team-hero">
    <div class="container">
        <h1>Meet Our <span>Team</span></h1>
        <p>The talented professionals behind The Hub Computers and Cyber Services</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Team Main Section -->
<section class="team-main">
    <div class="container">
        <h2 class="section-title">Our <span>Experts</span></h2>
        <p class="section-subtitle">We're proud of our team of certified professionals with years of experience in IT solutions and training.</p>
        
        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-member">
                <div class="team-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/team1.jpg" alt="Edwin Nyakeyo">
                    <div class="team-image-overlay"></div>
                </div>
                <div class="team-info">
                    <h3>Edwin Nyakeyo</h3>
                    <p class="team-position">Founder & CEO</p>
                    <p>With over 15 years in the IT industry, Edwin leads our team with expertise in network architecture and cybersecurity strategy.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="team-member">
                <div class="team-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/team2.jpg" alt="Brian Misiani">
                    <div class="team-image-overlay"></div>
                </div>
                <div class="team-info">
                    <h3>Brian Misiani</h3>
                    <p class="team-position">Cyber Security & Training Director</p>
                    <p>Brian leads our security operations and training programs with multiple certifications including CISSP and CEH.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="team-member">
                <div class="team-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/team3.jpg" alt="Michael Chen">
                    <div class="team-image-overlay"></div>
                </div>
                <div class="team-info">
                    <h3>Michael Chen</h3>
                    <p class="team-position">Senior Technician</p>
                    <p>Michael specializes in hardware repairs and data recovery with an impressive 98% success rate.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 4 -->
            <div class="team-member">
                <div class="team-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/team4.jpg" alt="David Rodriguez">
                    <div class="team-image-overlay"></div>
                </div>
                <div class="team-info">
                    <h3>David Rodriguez</h3>
                    <p class="team-position">Network Engineer</p>
                    <p>David designs and implements complex network solutions for our enterprise clients.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 5 -->
            <div class="team-member">
                <div class="team-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/team5.png" alt="Derick Muluka">
                    <div class="team-image-overlay"></div>
                </div>
                <div class="team-info">
                    <h3>Derick Muluka</h3>
                    <p class="team-position">Web Developer</p>
                    <p>Derick builds custom web solutions for our clients with expertise in modern frameworks and e-commerce.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 6 -->
            <div class="team-member">
                <div class="team-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/team6.jpg" alt="Grace Mwende">
                    <div class="team-image-overlay"></div>
                </div>
                <div class="team-info">
                    <h3>Grace Mwende</h3>
                    <p class="team-position">Graphic Design Instructor</p>
                    <p>Grace leads our creative design courses with expertise in Adobe Creative Suite and UI/UX principles.</p>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Values Section -->
<section class="team-values">
    <div class="container">
        <h2 class="section-title">Our Core <span>Values</span></h2>
        
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h3>Customer Focus</h3>
                <p>We prioritize your needs above all else, delivering personalized solutions with white-glove service. Our client satisfaction metrics consistently exceed industry standards, with a 98% retention rate.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Innovation</h3>
                <p>We stay ahead of technology trends through continuous R&D, bringing cutting-edge cyber solutions like quantum-resistant encryption and AI-driven threat detection to our clients before they become mainstream.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Integrity</h3>
                <p>We maintain the highest ethical standards with transparent pricing, honest assessments, and vendor-agnostic recommendations. Our zero-conflict policy ensures your best interests always come first.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Expertise</h3>
                <p>Our team holds over 50 industry certifications collectively, with specialized expertise in NIST frameworks, penetration testing, digital forensics, and secure network architecture. We invest heavily in continuous training.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>