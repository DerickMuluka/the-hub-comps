<?php
$pageTitle = "Our Projects";
$pageSpecificCSS = "projects.css";
include __DIR__ . '/../partials/header.php';
?>

<!-- Projects Hero -->
<section class="page-hero projects-hero">
    <div class="container">
        <h1>Our <span>Projects</span></h1>
        <p>Explore our portfolio of completed IT solutions and implementations</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Projects Main Section -->
<section class="projects-main">
    <div class="container">
        <h2 class="section-title">Featured <span>Projects</span></h2>
        <p class="section-subtitle">We've helped businesses of all sizes with their IT needs. Here are some examples of our work.</p>
        
        <div class="projects-filter">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="network">Network Solutions</button>
            <button class="filter-btn" data-filter="security">Security</button>
            <button class="filter-btn" data-filter="web">Web Development</button>
            <button class="filter-btn" data-filter="training">Training</button>
        </div>
        
        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card" data-category="network">
                <div class="project-image">
                    <img src="/frontend/assets/images/projects/network-upgrade.jpg" alt="Corporate Network Upgrade">
                </div>
                <div class="project-info">
                    <span class="project-category">Network Solutions</span>
                    <h3>Corporate Network Upgrade</h3>
                    <p>Complete network infrastructure overhaul for a mid-sized financial services company, improving speed and security.</p>
                    <a href="#" class="project-link">View Case Study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card" data-category="security">
                <div class="project-image">
                    <img src="/frontend/assets/images/projects/security-audit.jpg" alt="Security Audit">
                </div>
                <div class="project-info">
                    <span class="project-category">Security</span>
                    <h3>Enterprise Security Audit</h3>
                    <p>Comprehensive security assessment and hardening for a healthcare provider to meet HIPAA compliance requirements.</p>
                    <a href="#" class="project-link">View Case Study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="project-card" data-category="web">
                <div class="project-image">
                    <img src="/frontend/assets/images/projects/ecommerce-site.jpg" alt="E-commerce Website">
                </div>
                <div class="project-info">
                    <span class="project-category">Web Development</span>
                    <h3>E-commerce Website</h3>
                    <p>Custom-built online store with inventory management and payment gateway integration for a retail business.</p>
                    <a href="#" class="project-link">View Case Study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="project-card" data-category="training">
                <div class="project-image">
                    <img src="/frontend/assets/images/projects/staff-training.jpg" alt="Staff Training">
                </div>
                <div class="project-info">
                    <span class="project-category">Training</span>
                    <h3>Corporate Staff Training</h3>
                    <p>Customized MS Office and cybersecurity training program for 150+ employees at a manufacturing company.</p>
                    <a href="#" class="project-link">View Case Study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Project 5 -->
            <div class="project-card" data-category="network">
                <div class="project-image">
                    <img src="/frontend/assets/images/projects/wireless-network.jpg" alt="Wireless Network">
                </div>
                <div class="project-info">
                    <span class="project-category">Network Solutions</span>
                    <h3>Campus Wireless Network</h3>
                    <p>High-density wireless network deployment for a university campus with seamless roaming and centralized management.</p>
                    <a href="#" class="project-link">View Case Study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <!-- Project 6 -->
            <div class="project-card" data-category="security">
                <div class="project-image">
                    <img src="/frontend/assets/images/projects/phishing-test.jpg" alt="Phishing Test">
                </div>
                <div class="project-info">
                    <span class="project-category">Security</span>
                    <h3>Phishing Awareness Program</h3>
                    <p>Implemented a phishing simulation and training program that reduced click rates by 85% for a law firm.</p>
                    <a href="#" class="project-link">View Case Study <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Have a Project in Mind?</h2>
            <p>Contact us today to discuss your IT needs and how we can help bring your project to life.</p>
            <div class="cta-btns">
                <a href="/contact" class="btn btn-primary">Get in Touch</a>
                <a href="tel:+1234567890" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Project filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            // Filter projects
            projectCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
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
