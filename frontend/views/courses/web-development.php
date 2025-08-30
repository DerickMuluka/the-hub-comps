<?php
$pageTitle = "Web Development Course";
$pageSpecificCSS = "course-details.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Course Hero -->
<section class="page-hero course-hero web-development-hero">
    <div class="container">
        <h1>Web <span>Development</span> Course</h1>
        <p>Learn HTML, CSS, JavaScript and build responsive websites from scratch</p>
        <div class="course-meta">
            <span><i class="fas fa-clock"></i> 10 Weeks</span>
            <span><i class="fas fa-money-bill-wave"></i> Ksh.15,000</span>
            <span><i class="fas fa-user-graduate"></i> Intermediate Level</span>
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
                <p>Our Web Development course is designed for beginners who want to learn how to build modern, responsive websites from scratch. You'll learn HTML, CSS, JavaScript, and other essential web technologies to create professional websites that work on all devices.</p>
                
                <div class="course-objectives">
                    <h3>What You'll Learn</h3>
                    <div class="objectives-grid">
                        <div class="objective">
                            <i class="fas fa-code"></i>
                            <h4>Frontend Development</h4>
                            <ul>
                                <li>HTML5 and semantic markup</li>
                                <li>CSS3 and responsive design</li>
                                <li>JavaScript fundamentals</li>
                                <li>DOM manipulation</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-paint-brush"></i>
                            <h4>Design & UX</h4>
                            <ul>
                                <li>Modern design principles</li>
                                <li>User experience best practices</li>
                                <li>Color theory and typography</li>
                                <li>Mobile-first design</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-tools"></i>
                            <h4>Development Tools</h4>
                            <ul>
                                <li>Version control with Git</li>
                                <li>Code editors and IDEs</li>
                                <li>Browser developer tools</li>
                                <li>Package managers (npm)</li>
                            </ul>
                        </div>
                        
                        <div class="objective">
                            <i class="fas fa-rocket"></i>
                            <h4>Deployment</h4>
                            <ul>
                                <li>Web hosting setup</li>
                                <li>Domain management</li>
                                <li>Performance optimization</li>
                                <li>SEO fundamentals</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="course-schedule">
                    <h3>Course Schedule</h3>
                    <div class="schedule-tabs">
                        <button class="tab-btn active" data-tab="week1-3">Weeks 1-3</button>
                        <button class="tab-btn" data-tab="week4-6">Weeks 4-6</button>
                        <button class="tab-btn" data-tab="week7-10">Weeks 7-10</button>
                    </div>
                    
                    <div class="tab-content active" id="week1-3">
                        <h4>HTML & CSS Fundamentals</h4>
                        <ul>
                            <li>HTML5 structure and semantic elements</li>
                            <li>CSS selectors, box model, and positioning</li>
                            <li>Responsive design with media queries</li>
                            <li>Flexbox and CSS Grid layouts</li>
                            <li>Forms and user input validation</li>
                            <li>Accessibility best practices</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week4-6">
                        <h4>JavaScript & Interactivity</h4>
                        <ul>
                            <li>JavaScript syntax and fundamentals</li>
                            <li>DOM manipulation and events</li>
                            <li>ES6+ features (arrow functions, destructuring)</li>
                            <li>Asynchronous JavaScript (callbacks, promises)</li>
                            <li>API integration with Fetch</li>
                            <li>Introduction to jQuery and Bootstrap</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="week7-10">
                        <h4>Advanced Topics & Project</h4>
                        <ul>
                            <li>Version control with Git and GitHub</li>
                            <li>CSS preprocessors (SASS/SCSS)</li>
                            <li>Build tools and task runners</li>
                            <li>Basic PHP and form handling</li>
                            <li>Website deployment and hosting</li>
                            <li>Final portfolio project development</li>
                        </ul>
                    </div>
                </div>
                
                <div class="course-outcome">
                    <h3>Learning Outcomes</h3>
                    <p>By the end of this course, students will be able to:</p>
                    <ul>
                        <li>Create responsive websites using HTML5 and CSS3</li>
                        <li>Implement interactive features with JavaScript</li>
                        <li>Apply modern design principles and UX best practices</li>
                        <li>Use version control with Git for project management</li>
                        <li>Deploy websites to live servers</li>
                        <li>Build a professional portfolio of web projects</li>
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
                                <p>10 Weeks (40 hours total)</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-money-bill-wave"></i>
                            <div>
                                <h4>Fee:</h4>
                                <p>Ksh.15,000 (including materials)</p>
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
                                <p>Basic computer literacy</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-certificate"></i>
                            <div>
                                <h4>Certification:</h4>
                                <p>Web Development Certificate awarded</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>contact?course=web-development" class="btn btn-primary">Enroll Now</a>
                    <a href="<?php echo BASE_URL . APP_ROOT; ?>enquiry?type=course&slug=web-development&title=Web Development" class="btn btn-outline">Make an Enquiry</a>
                    
                    <div class="course-instructor">
                        <h4>Course Instructor</h4>
                        <div class="instructor-profile">
                            <img src="<?php echo BASE_URL . APP_ROOT; ?>frontend/assets/images/team/instructor4.jpg" alt="Emily Chen">
                            <div>
                                <h5>Emily Chen</h5>
                                <p>Senior Web Developer</p>
                                <p>8+ years web development experience</p>
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
                        <p>"This course gave me the skills to transition into a web development career. The hands-on projects were especially valuable, and I now have a portfolio that helped me land my first job."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>David Kimani</h5>
                        <p>Junior Web Developer</p>
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
                        <p>"The instructors were patient and knowledgeable. I appreciated how they made complex concepts easy to understand. I can now build websites for my small business clients."</p>
                    </div>
                    <div class="testimonial-author">
                        <h5>Grace Mwende</h5>
                        <p>Freelance Developer</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="course-faq">
            <h3>Frequently Asked Questions</h3>
            
            <div class="faq-item">
                <button class="faq-question">Do I need any programming experience for this course?</button>
                <div class="faq-answer">
                    <p>No prior programming experience is required. This course is designed for complete beginners, and we start with the absolute basics of web development.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">What software do I need for this course?</button>
                <div class="faq-answer">
                    <p>You'll need a code editor (we recommend Visual Studio Code, which is free), and a modern web browser. All other tools we use in the course are free and open-source.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Will I be able to get a job after this course?</button>
                <div class="faq-answer">
                    <p>Many of our graduates have successfully found employment as junior web developers or started freelance careers. We provide career guidance and portfolio development to help you in your job search.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">Do I need a powerful computer for web development?</button>
                <div class="faq-answer">
                    <p>No, web development doesn't require an expensive computer. Any relatively modern computer (from the last 5 years) with at least 4GB RAM should be sufficient for this course.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Start Your Web Development Journey</h2>
            <p>Learn the skills to build modern websites and launch your career in tech. Limited seats available.</p>
            <div class="cta-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>contact?course=web-development" class="btn btn-primary">Enroll Now</a>
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