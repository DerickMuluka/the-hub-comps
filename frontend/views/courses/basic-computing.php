<?php
$pageTitle = "Basic Computing Course";
$pageSpecificCSS = "course-details.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Course Hero -->
<section class="page-hero course-hero basic-computing-hero">
    <div class="container">
        <h1>Basic <span>Computing</span> Course</h1>
        <p>Essential computer skills for beginners in the digital age</p>
        <div class="course-meta">
            <span><i class="fas fa-clock"></i> 6 Weeks</span>
            <span><i class="fas fa-money-bill-wave"></i> Ksh.6000</span>
            <span><i class="fas fa-user-graduate"></i> Beginner Level</span>
        </div>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Course Details -->
<section class="course-details">
    <div class="container">
        <div class="course-content">
            <div class="course-description">
                <h2>Course Overview</h2>
                <p>Our Basic Computing course is designed for absolute beginners who want to gain confidence in using computers for personal or professional purposes. This comprehensive course covers everything from computer fundamentals to internet safety and basic productivity tools.</p>
                
                <div class="course-objectives">
                    <h3>What You'll Learn</h3>
                    <div class="objectives-grid">
                        <div class="objective">
                            <i class="fas fa-desktop"></i>
                            <h4>Computer Fundamentals</h4>
                            <ul>
                                <li>Understanding computer hardware</li>
                                <li>Operating system basics</li>
                                <li>File and folder management</li>
                                <li>Basic troubleshooting</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-keyboard"></i>
                            <h4>Typing & Word Processing</h4>
                            <ul>
                                <li>Proper typing techniques</li>
                                <li>Creating and formatting documents</li>
                                <li>Saving and printing files</li>
                                <li>Basic Microsoft Word</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-globe"></i>
                            <h4>Internet & Email</h4>
                            <ul>
                                <li>Web browsing basics</li>
                                <li>Online safety and security</li>
                                <li>Creating and using email</li>
                                <li>Downloading and uploading files</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Digital Lifestyle</h4>
                            <ul>
                                <li>Smartphone basics</li>
                                <li>Social media introduction</li>
                                <li>Online banking and payments</li>
                                <li>Digital photography basics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="course-schedule">
                    <h3>Course Schedule</h3>
                    <div class="schedule-tabs">
                        <button class="tab-btn active" data-tab="week1">Week 1-2</button>
                        <button class="tab-btn" data-tab="week3">Week 3-4</button>
                        <button class="tab-btn" data-tab="week5">Week 5-6</button>
                    </div>
                    
                    <div class="tab-content active" id="week1">
                        <h4>Computer Fundamentals</h4>
                        <ul>
                            <li>Introduction to computers</li>
                            <li>Understanding hardware components</li>
                            <li>Operating system navigation</li>
                            <li>File management and organization</li>
                            <li>Basic computer maintenance</li>
                            <li>Introduction to typing</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week3">
                        <h4>Productivity & Internet Basics</h4>
                        <ul>
                            <li>Word processing fundamentals</li>
                            <li>Creating and formatting documents</li>
                            <li>Introduction to spreadsheets</li>
                            <li>Internet basics and web browsing</li>
                            <li>Search engine techniques</li>
                            <li>Online safety and security</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week5">
                        <h4>Digital Communication & Practical Applications</h4>
                        <ul>
                            <li>Email setup and usage</li>
                            <li>Social media introduction</li>
                            <li>Online banking and payments</li>
                            <li>Smartphone basics</li>
                            <li>Digital photography and storage</li>
                            <li>Practical projects and review</li>
                        </ul>
                    </div>
                </div>
                
                <div class="course-outcome">
                    <h3>Learning Outcomes</h3>
                    <p>By the end of this course, students will be able to:</p>
                    <ul>
                        <li>Confidently operate a computer and understand its components</li>
                        <li>Create, save, and manage files and folders</li>
                        <li>Type efficiently and create basic documents</li>
                        <li>Safely browse the internet and use email</li>
                        <li>Understand basic online services and digital tools</li>
                        <li>Apply computer skills to everyday tasks</li>
                    </ul>
                </div>
            </div>
            
            <div class="course-sidebar">
                <div class="course-card">
                    <h3>Course Details</h3>
                    <div class="course-info">
                        <div class="info-item">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <h4>Duration:</h4>
                                <p>6 Weeks (24 hours total)</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-money-bill-wave"></i>
                            <div>
                                <h4>Fee:</h4>
                                <p>Ksh.6,000 (including materials)</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>Class Size:</h4>
                                <p>Maximum 12 students</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-laptop"></i>
                            <div>
                                <h4>Requirements:</h4>
                                <p>No prior experience needed</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-certificate"></i>
                            <div>
                                <h4>Certification:</h4>
                                <p>Certificate of Completion awarded</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=basic-computing" class="btn btn-primary">Enroll Now</a>
                    
                    <div class="course-instructor">
                        <h4>Course Instructor</h4>
                        <div class="instructor-profile">
                            <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/instructor2.jpg" alt="Joy Ashiali">
                            <div>
                                <h5>Joy Ashiali</h5>
                                <p>ICT Trainer</p>
                                <p>8+ years teaching beginners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="course-testimonials">
            <h3>What Our Students Say</h3>
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
                        <p>"I was afraid of computers before taking this course. Now I can send emails, create documents, and even help my grandchildren with their homework. The patient instruction made all the difference."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>Margaret Chesoba</h5>
                        <p>Retired Teacher</p>
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
                        <p>"This course gave me the confidence to apply for jobs that require computer skills. I got a position as a receptionist thanks to what I learned here."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>James Korir</h5>
                        <p>Office Receptionist</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="course-faq">
            <h3>Frequently Asked Questions</h3>
            
            <div class="faq-item">
                <button class="faq-question">I've never touched a computer before. Is this course for me?</button>
                <div class="faq-answer">
                    <p>Absolutely! This course is designed specifically for complete beginners. We start with the very basics and progress at a comfortable pace.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">What age group is this course suitable for?</button>
                <div class="faq-answer">
                    <p>We've successfully trained students from 15 to 85 years old. As long as you're eager to learn, age is not a barrier.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Do I need to buy any software for this course?</button>
                <div class="faq-answer">
                    <p>No, all necessary software is provided during class sessions. We'll also guide you on free alternatives you can use at home.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Will this help me get a job?</button>
                <div class="faq-answer">
                    <p>Many entry-level office positions require basic computer skills. This course covers the fundamental skills employers look for, and we include job application tips in the curriculum.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Start Your Digital Journey Today</h2>
            <p>Don't let lack of computer skills hold you back. Enroll now and gain the confidence to navigate the digital world.</p>
            <div class="cta-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=basic-computing" class="btn btn-primary">Enroll Now</a>
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call for Questions
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
