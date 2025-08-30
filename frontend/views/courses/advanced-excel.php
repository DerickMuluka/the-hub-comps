<?php
$pageTitle = "Advanced Excel Course";
$pageSpecificCSS = "course-details.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Course Hero -->
<section class="page-hero course-hero advanced-excel-hero">
    <div class="container">
        <h1>Advanced <span>Excel</span> Course</h1>
        <p>Master advanced Excel functions and data analysis for professional reporting</p>
        <div class="course-meta">
            <span><i class="fas fa-clock"></i> 5 Weeks</span>
            <span><i class="fas fa-money-bill-wave"></i> Ksh.8,000</span>
            <span><i class="fas fa-user-graduate"></i> Advanced Level</span>
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
                <p>Our Advanced Excel course is designed for professionals who want to master complex Excel functions, data analysis techniques, and automation. This comprehensive course will transform you into an Excel power user capable of handling complex data tasks efficiently.</p>
                
                <div class="course-objectives">
                    <h3>What You'll Learn</h3>
                    <div class="objectives-grid">
                        <div class="objective">
                            <i class="fas fa-calculator"></i>
                            <h4>Advanced Formulas</h4>
                            <ul>
                                <li>Complex nested functions</li>
                                <li>Array formulas</li>
                                <li>Dynamic named ranges</li>
                                <li>Advanced lookup techniques</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-table"></i>
                            <h4>Data Analysis</h4>
                            <ul>
                                <li>Pivot tables and charts</li>
                                <li>Power Query integration</li>
                                <li>Data modeling</li>
                                <li>Advanced filtering</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-chart-line"></i>
                            <h4>Visualization</h4>
                            <ul>
                                <li>Advanced chart types</li>
                                <li>Dashboard creation</li>
                                <li>Conditional formatting</li>
                                <li>Sparklines and data bars</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-cogs"></i>
                            <h4>Automation</h4>
                            <ul>
                                <li>Macro recording</li>
                                <li>VBA programming basics</li>
                                <li>Automated reporting</li>
                                <li>Custom functions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="course-schedule">
                    <h3>Course Schedule</h3>
                    <div class="schedule-tabs">
                        <button class="tab-btn active" data-tab="week1">Week 1-2</button>
                        <button class="tab-btn" data-tab="week3">Week 3-4</button>
                        <button class="tab-btn" data-tab="week5">Week 5</button>
                    </div>
                    
                    <div class="tab-content active" id="week1">
                        <h4>Advanced Formulas & Functions</h4>
                        <ul>
                            <li>Advanced lookup functions (INDEX, MATCH, XLOOKUP)</li>
                            <li>Logical and statistical functions</li>
                            <li>Text and date functions</li>
                            <li>Array formulas and dynamic arrays</li>
                            <li>Error handling techniques</li>
                            <li>Formula auditing and optimization</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week3">
                        <h4>Data Analysis & Visualization</h4>
                        <ul>
                            <li>Advanced pivot table techniques</li>
                            <li>Power Query for data transformation</li>
                            <li>Data model and relationships</li>
                            <li>Advanced charting and visualization</li>
                            <li>Dashboard design principles</li>
                            <li>Interactive reporting</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week5">
                        <h4>Automation & Advanced Topics</h4>
                        <ul>
                            <li>Introduction to macros</li>
                            <li>VBA programming fundamentals</li>
                            <li>Automating repetitive tasks</li>
                            <li>Custom function creation</li>
                            <li>Data validation advanced techniques</li>
                            <li>Final project and review</li>
                        </ul>
                    </div>
                </div>
                
                <div class="course-outcome">
                    <h3>Learning Outcomes</h3>
                    <p>By the end of this course, students will be able to:</p>
                    <ul>
                        <li>Create complex formulas and functions for data analysis</li>
                        <li>Build advanced pivot tables and interactive dashboards</li>
                        <li>Use Power Query for data transformation and cleaning</li>
                        <li>Automate repetitive tasks using macros and VBA</li>
                        <li>Create professional reports and data visualizations</li>
                        <li>Solve complex business problems using Excel</li>
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
                                <p>5 Weeks (20 hours total)</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-money-bill-wave"></i>
                            <div>
                                <h4>Fee:</h4>
                                <p>Ksh.8,000 (including materials)</p>
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
                                <p>Intermediate Excel knowledge</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-certificate"></i>
                            <div>
                                <h4>Certification:</h4>
                                <p>Advanced Excel Certificate awarded</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>contact?course=advanced-excel" class="btn btn-primary">Enroll Now</a>
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>enquiry?type=course&slug=advanced-excel&title=Advanced Excel" class="btn btn-outline">Make an Enquiry</a>
                    
                    <div class="course-instructor">
                        <h4>Course Instructor</h4>
                        <div class="instructor-profile">
                            <img src="<?php echo BASE_URL . APP_ROOT; ?>frontend/assets/images/team/instructor3.jpg" alt="John Smith">
                            <div>
                                <h5>John Smith</h5>
                                <p>Excel Specialist</p>
                                <p>12+ years data analysis experience</p>
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
                        <p>"This course completely transformed how I work with data. I now automate reports that used to take me hours. The instructor's expertise in advanced Excel functions was exceptional."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>Sarah Johnson</h5>
                        <p>Financial Analyst</p>
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
                        <p>"The advanced pivot table and Power Query modules alone were worth the course fee. I've significantly improved my reporting efficiency at work."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>Michael Chen</h5>
                        <p>Business Analyst</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="course-faq">
            <h3>Frequently Asked Questions</h3>
            
            <div class="faq-item">
                <button class="faq-question">What version of Excel is required for this course?</button>
                <div class="faq-answer">
                    <p>This course is designed for Excel 2016 and later versions, including Office 365. Most features covered are available in Excel 2016+, but some advanced features may require Office 365.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Do I need programming experience for the VBA section?</button>
                <div class="faq-answer">
                    <p>No prior programming experience is required. We start with the absolute basics of VBA and gradually build up to more complex automation tasks.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Will this help me get Excel certification?</button>
                <div class="faq-answer">
                    <p>Yes, this course covers many of the advanced topics tested in Microsoft Excel Expert certification exams. We provide practice materials and exam preparation guidance.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Can I access course materials after completion?</button>
                <div class="faq-answer">
                    <p>Yes, all students receive lifetime access to course materials, including video recordings, practice files, and reference guides.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Master Advanced Excel Skills</h2>
            <p>Enhance your data analysis capabilities and become an Excel expert. Limited seats available.</p>
            <div class="cta-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>contact?course=advanced-excel" class="btn btn-primary">Enroll Now</a>
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call for Info
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Tab functionality for course schedule
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.dataset.tab;
            
            // Update active tab button
            tabBtns.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Show corresponding content
            tabContents.forEach(content => {
                content.classList.remove('active');
                if (content.id === tabId) {
                    content.classList.add('active');
                }
            });
        });
    });
    
    // FAQ functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            this.classList.toggle('active');
            const answer = this.nextElementSibling;
            answer.classList.toggle('active');
        });
    });
});
</script>

<?php include __DIR__ . '/../../partials/footer.php'; ?>