<?php
$pageTitle = "MS Office Course";
$pageSpecificCSS = "course-details.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Course Hero -->
<section class="page-hero course-hero ms-office-hero">
    <div class="container">
        <h1>MS <span>Office</span> Course</h1>
        <p>Master the essential productivity tools for professional success</p>
        <div class="course-meta">
            <span><i class="fas fa-clock"></i> 4 Weeks</span>
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
                <p>Our MS Office course provides comprehensive training in Microsoft's powerful productivity suite. Whether you're a complete beginner or looking to enhance your skills, this course will give you the confidence to create professional documents, spreadsheets, presentations, and more.</p>
                
                <div class="course-objectives">
                    <h3>What You'll Learn</h3>
                    <div class="objectives-grid">
                        <div class="objective">
                            <i class="fas fa-file-word"></i>
                            <h4>Microsoft Word</h4>
                            <ul>
                                <li>Document formatting and styling</li>
                                <li>Tables and graphics</li>
                                <li>Mail merge</li>
                                <li>Collaboration features</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-file-excel"></i>
                            <h4>Microsoft Excel</h4>
                            <ul>
                                <li>Formulas and functions</li>
                                <li>Data analysis tools</li>
                                <li>Charts and graphs</li>
                                <li>Pivot tables</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-file-powerpoint"></i>
                            <h4>Microsoft PowerPoint</h4>
                            <ul>
                                <li>Professional slide design</li>
                                <li>Animations and transitions</li>
                                <li>Presentation delivery</li>
                                <li>Multimedia integration</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-envelope"></i>
                            <h4>Microsoft Outlook</h4>
                            <ul>
                                <li>Email management</li>
                                <li>Calendar and scheduling</li>
                                <li>Contacts and tasks</li>
                                <li>Productivity tips</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="course-schedule">
                    <h3>Course Schedule</h3>
                    <div class="schedule-tabs">
                        <button class="tab-btn active" data-tab="week1">Week 1</button>
                        <button class="tab-btn" data-tab="week2">Week 2</button>
                        <button class="tab-btn" data-tab="week3">Week 3</button>
                        <button class="tab-btn" data-tab="week4">Week 4</button>
                    </div>
                    
                    <div class="tab-content active" id="week1">
                        <h4>Microsoft Word Fundamentals</h4>
                        <ul>
                            <li>Interface and basic navigation</li>
                            <li>Creating and formatting documents</li>
                            <li>Working with styles and themes</li>
                            <li>Inserting and formatting tables</li>
                            <li>Adding images and graphics</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week2">
                        <h4>Microsoft Excel Fundamentals</h4>
                        <ul>
                            <li>Spreadsheet basics</li>
                            <li>Essential formulas and functions</li>
                            <li>Cell formatting and conditional formatting</li>
                            <li>Working with charts</li>
                            <li>Data sorting and filtering</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week3">
                        <h4>Microsoft PowerPoint & Outlook</h4>
                        <ul>
                            <li>Creating professional presentations</li>
                            <li>Slide transitions and animations</li>
                            <li>Presentation delivery techniques</li>
                            <li>Email management in Outlook</li>
                            <li>Calendar and contact management</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week4">
                        <h4>Advanced Topics & Practical Projects</h4>
                        <ul>
                            <li>Advanced Word features (mail merge, references)</li>
                            <li>Advanced Excel features (pivot tables, data analysis)</li>
                            <li>Integrating Office applications</li>
                            <li>Practical projects and assessments</li>
                            <li>Course review and certification</li>
                        </ul>
                    </div>
                </div>
                
                <div class="course-outcome">
                    <h3>Learning Outcomes</h3>
                    <p>By the end of this course, students will be able to:</p>
                    <ul>
                        <li>Create professional documents in Microsoft Word</li>
                        <li>Perform data analysis and visualization in Excel</li>
                        <li>Design and deliver effective presentations</li>
                        <li>Manage email and schedules efficiently</li>
                        <li>Integrate Office applications for maximum productivity</li>
                        <li>Apply best practices for professional document creation</li>
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
                                <p>4 Weeks (16 hours total)</p>
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
                                <p>Maximum 10 students</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-laptop"></i>
                            <div>
                                <h4>Requirements:</h4>
                                <p>Basic computer skills</p>
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
                    
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=ms-office" class="btn btn-primary">Enroll Now</a>
                    
                    <div class="course-instructor">
                        <h4>Course Instructor</h4>
                        <div class="instructor-profile">
                            <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/team/instructor1.jpg" alt="Jane Muthoni">
                            <div>
                                <h5>Jane Muthoni</h5>
                                <p>Microsoft Certified Trainer</p>
                                <p>10+ years experience</p>
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
                        <p>"This course transformed how I work with Office applications. I now create professional reports in half the time it used to take me. The instructor was patient and knowledgeable."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>David Sotik</h5>
                        <p>Administrative Assistant</p>
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
                        <p>"The Excel training alone was worth the course fee. I learned pivot tables and data analysis techniques that have made me much more valuable at work."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>Susan Kerubo</h5>
                        <p>Accountant</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="course-faq">
            <h3>Frequently Asked Questions</h3>
            
            <div class="faq-item">
                <button class="faq-question">Do I need to bring my own laptop?</button>
                <div class="faq-answer">
                    <p>We provide computers for in-class use, but we recommend bringing your own laptop if you have one to practice on your own device.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Which version of Office will we use?</button>
                <div class="faq-answer">
                    <p>We use Microsoft Office 2019/Office 365 in our training, but the skills learned are applicable to most recent versions of Office.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Is there any certification exam?</button>
                <div class="faq-answer">
                    <p>This course includes a practical assessment at the end. Upon successful completion, you'll receive a certificate from The Hub. For official Microsoft certification, we can guide you on taking the MOS exams separately.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">What if I miss a class?</button>
                <div class="faq-answer">
                    <p>We offer make-up sessions for missed classes, or you can join the next cohort for the sessions you missed at no additional cost.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Master MS Office?</h2>
            <p>Enroll today and gain the skills that will make you more productive and employable.</p>
            <div class="cta-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact?course=ms-office" class="btn btn-primary">Enroll Now</a>
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call for Questions
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
