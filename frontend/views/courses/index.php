<?php
$pageTitle = "Our Courses";
$pageSpecificCSS = "courses.css";
$pageSpecificJS = "course-modal.js";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Courses Hero -->
<section class="page-hero courses-hero">
    <div class="container">
        <h1>Our <span>Courses</span></h1>
        <p>Professional computer training to enhance your skills and career</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Courses Main Section -->
<section class="courses-main">
    <div class="container">
        <div class="section-intro">
            <h2>Available <span>Programs</span></h2>
            <p>We offer comprehensive computer training programs designed for both beginners and professionals. Our courses are practical, hands-on, and taught by industry experts.</p>
        </div>
        
        <div class="courses-filter">
            <button class="filter-btn active" data-filter="all">All Courses</button>
            <button class="filter-btn" data-filter="beginner">Beginner</button>
            <button class="filter-btn" data-filter="intermediate">Intermediate</button>
            <button class="filter-btn" data-filter="advanced">Advanced</button>
        </div>
        
        <div class="courses-grid">
            <!-- MS Office Course -->
            <div class="course-card" data-course="ms-office" data-level="beginner">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/ms-office.jpg" alt="MS Office Course">
                     <!-- <span class="course-level beginner">Beginner</span>-->
                </div>
                <div class="course-info">
                    <h3>MS Office Package</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 4 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.6000</span>
                    </div>
                    <p>Master Microsoft Word, Excel, PowerPoint, and Outlook for professional use.</p>
                    <div class="course-actions">
                        <button>
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/ms-office" class="btn btn-primary course-details-btn" >View Details</a>
                        </button>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=ms-office" class="btn btn-outline">Enroll Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Basic Computing Course -->
            <div class="course-card" data-course="basic-computing" data-level="beginner">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/basic-computing.jpg" alt="Basic Computing Course">
                    <!-- <span class="course-level beginner">Beginner</span> -->
                </div>
                <div class="course-info">
                    <h3>Basic Computing</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 6 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.6000</span>
                    </div>
                    <p>Essential computer skills for beginners, including internet, email, and file management.</p>
                    <div class="course-actions">
                        <button>
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/basic-computing" class="btn btn-primary course-details-btn" >View Details</a>
                        </button>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=basic-computing" class="btn btn-outline">Enroll Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Cyber Security Course -->
            <div class="course-card" data-course="cyber-security" data-level="intermediate">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/cyber-security.jpg" alt="Cyber Security Course">
                    <!-- <span class="course-level intermediate">Intermediate</span> -->
                </div>
                <div class="course-info">
                    <h3>Cyber Security Basics</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 8 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.8000</span>
                    </div>
                    <p>Learn how to protect yourself and your business from online threats and attacks.</p>
                    <div class="course-actions">
                        <button>
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/cyber-security" class="btn btn-primary course-details-btn" >View Details</a>
                        </button>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=cyber-security" class="btn btn-outline">Enroll Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Excel Course -->
            <div class="course-card" data-course="advanced-excel" data-level="advanced">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/advanced-excel.jpg" alt="Advanced Excel Course">
                    <!-- <span class="course-level advanced">Advanced</span> -->
                </div>
                <div class="course-info">
                    <h3>Advanced Excel</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 5 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.3000</span>
                    </div>
                    <p>Master advanced Excel functions, macros, pivot tables, and data analysis techniques.</p>
                    <div class="course-actions">
                        <button>
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/advanced-excel" class="btn btn-primary course-details-btn" >View Details</a>
                        </button>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=advanced-excel" class="btn btn-outline">Enroll Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Web Development Course -->
            <div class="course-card" data-course="web-development" data-level="intermediate">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/web-development.jpg" alt="Web Development Course">
                    <!-- <span class="course-level intermediate">Intermediate</span> -->
                </div>
                <div class="course-info">
                    <h3>Web Development</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 10 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.10000</span>
                    </div>
                    <p>Learn HTML, CSS, JavaScript and build responsive websites from scratch.</p>
                    <div class="course-actions">
                        <button>
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/web-development" class="btn btn-primary course-details-btn" >View Details</a>
                        </button>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=web-development" class="btn btn-outline">Enroll Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Graphic Design Course -->
            <div class="course-card" data-course="graphic-design" data-level="intermediate">
                <div class="course-image">
                    <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/courses/graphic-design.jpg" alt="Graphic Design Course">
                    <!-- <span class="course-level intermediate">Intermediate</span> -->
                </div>
                <div class="course-info">
                    <h3>Graphic Design</h3>
                    <div class="course-meta">
                        <span><i class="fas fa-clock"></i> 8 Weeks</span>
                        <span><i class="fas fa-money-bill-wave"></i> Ksh.5000</span>
                    </div>
                    <p>Master Adobe Photoshop, Illustrator and design principles for professional results.</p>
                    <div class="course-actions">
                        <button>
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/graphic-design" class="btn btn-primary course-details-btn" >View Details</a>
                        </button>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=graphic-design" class="btn btn-outline">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Benefits Section -->
<section class="course-benefits">
    <div class="container">
        <h2 class="section-title">Why Choose <span>Our Courses</span></h2>
        
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Expert Instructors</h3>
                <p>Learn from industry professionals with years of practical experience.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Hands-on Training</h3>
                <p>Practical, project-based learning with real-world applications.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Certification</h3>
                <p>Receive a certificate upon completion to boost your resume.</p>
            </div>
            
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Small Class Sizes</h3>
                <p>Personalized attention with limited seats per class.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
