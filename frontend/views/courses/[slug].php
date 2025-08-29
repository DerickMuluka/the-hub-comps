<?php
// Get the course slug from URL
$slug = $_GET['slug'] ?? '';
$courseData = null;

// Sample course data - in a real app, this would come from a database
$courses = [
    'ms-office' => [
        'title' => 'MS Office Package',
        'description' => 'Master Microsoft Word, Excel, PowerPoint, and Outlook for professional use. This comprehensive course covers all essential features of the MS Office suite, helping you become proficient in creating professional documents, spreadsheets, presentations, and managing emails efficiently.',
        'duration' => '4 Weeks',
        'price' => 'Ksh.6000',
        'level' => 'Beginner',
        'image' => '/frontend/assets/images/courses/ms-office.jpg',
        'syllabus' => [
            'Introduction to MS Office Interface',
            'Word: Document formatting and styles',
            'Word: Tables, images, and advanced features',
            'Excel: Formulas and basic functions',
            'Excel: Charts and data visualization',
            'PowerPoint: Creating effective presentations',
            'Outlook: Email management and calendar',
            'Integration between Office applications'
        ],
        'features' => [
            'Hands-on exercises with real-world examples',
            'Personalized feedback from instructors',
            'Downloadable course materials',
            'Certificate of completion'
        ]
    ],
    'basic-computing' => [
        'title' => 'Basic Computing',
        'description' => 'Essential computer skills for beginners, including internet, email, and file management. This course is perfect for those new to computers or wanting to improve their fundamental skills for personal or professional use.',
        'duration' => '6 Weeks',
        'price' => 'Ksh.6000',
        'level' => 'Beginner',
        'image' => '/frontend/assets/images/courses/basic-computing.jpg',
        'syllabus' => [
            'Computer hardware and software basics',
            'Operating system fundamentals',
            'File and folder management',
            'Word processing essentials',
            'Internet basics and web browsing',
            'Email setup and usage',
            'Online safety and security',
            'Introduction to cloud storage'
        ],
        'features' => [
            'Patient, experienced instructors',
            'Small class sizes for individual attention',
            'Practice on actual computers',
            'Take-home reference guide'
        ]
    ],
    'advanced-excel' => [
        'title' => 'Advanced Excel',
        'description' => 'Master advanced Excel functions, macros, pivot tables, and data analysis techniques for professional data management and reporting.',
        'duration' => '5 Weeks',
        'price' => 'Ksh.3000',
        'level' => 'Advanced',
        'image' => '/frontend/assets/images/courses/advanced-excel.jpg',
        'syllabus' => [
            'Advanced formulas and functions',
            'Data validation and conditional formatting',
            'Pivot tables and pivot charts',
            'Macros and VBA programming',
            'Data analysis tools',
            'Advanced charting techniques',
            'Power Query and Power Pivot',
            'Dashboard creation and reporting'
        ],
        'features' => [
            'Hands-on exercises with real-world data',
            'Advanced Excel certification preparation',
            'Personal project guidance',
            'Certificate of completion with advanced distinction'
        ]
    ],
    'web-development' => [
        'title' => 'Web Development',
        'description' => 'Learn HTML, CSS, JavaScript and build responsive websites from scratch. Master front-end development and basic back-end concepts.',
        'duration' => '10 Weeks',
        'price' => 'Ksh.15000',
        'level' => 'Intermediate',
        'image' => '/frontend/assets/images/courses/web-development.jpg',
        'syllabus' => [
            'HTML5 and semantic markup',
            'CSS3 and responsive design',
            'JavaScript fundamentals',
            'DOM manipulation',
            'jQuery and Bootstrap',
            'Version control with Git',
            'Basic PHP and MySQL',
            'Project deployment'
        ],
        'features' => [
            'Build real-world projects',
            'Code reviews from experienced developers',
            'Portfolio development guidance',
            'GitHub profile setup'
        ]
    ],
    'cyber-security' => [
        'title' => 'Cyber Security Basics',
        'description' => 'Learn how to protect yourself and your business from online threats and attacks. This course provides practical knowledge about cybersecurity threats and how to defend against them in both personal and professional contexts.',
        'duration' => '8 Weeks',
        'price' => 'Ksh.8000',
        'level' => 'Intermediate',
        'image' => '/frontend/assets/images/courses/cyber-security.jpg',
        'syllabus' => [
            'Introduction to cybersecurity threats',
            'Password management and authentication',
            'Securing personal devices',
            'Network security fundamentals',
            'Recognizing phishing and social engineering',
            'Data protection and privacy',
            'Secure web browsing practices',
            'Incident response basics'
        ],
        'features' => [
            'Taught by certified security professionals',
            'Simulated attack scenarios',
            'Latest security tools and techniques',
            'Preparation for security certifications'
        ]
        ],
        'graphic-design' => [
        'title' => 'Graphic Design',
        'description' => 'Master Adobe Photoshop, Illustrator and design principles for professional results in print and digital media.',
        'duration' => '8 Weeks',
        'price' => 'Ksh.12000',
        'level' => 'Intermediate',
        'image' => '/frontend/assets/images/courses/graphic-design.jpg',
        'syllabus' => [
            'Design principles and theory',
            'Adobe Photoshop mastery',
            'Adobe Illustrator techniques',
            'Typography and color theory',
            'Logo and brand identity design',
            'Print design and preparation',
            'Digital graphics for web',
            'Portfolio development'
        ],
        'features' => [
            'Access to Adobe Creative Cloud',
            'Professional design critiques',
            'Print and digital project work',
            'Portfolio review and guidance'
        ]
    ]
];

// Find the requested course
if (array_key_exists($slug, $courses)) {
    $courseData = $courses[$slug];
    $pageTitle = $courseData['title'] . " Course";
} else {
    // Course not found - redirect or show 404
    header("Location: /courses");
    exit();
}

$pageSpecificCSS = "courses.css";

include __DIR__ . '/../../partials/header.php';
?>

<!-- Course Hero -->
<section class="page-hero course-hero" style="background-color: #2c3e50; color: #ffffff;">
    <div class="container">
        <h1><?php echo $courseData['title']; ?> <span>Course</span></h1>
        <p><?php echo $courseData['description']; ?></p>
    </div>
    <div class="hero-overlay" style="background-color: rgba(0, 0, 0, 0.3);"></div>
</section>

<!-- Course Main Section -->
<section class="course-detail">
    <div class="container">
        <div class="course-detail-grid">
            <div class="course-main-content">
                <h2>About This Course</h2>
                <p><?php echo $courseData['description']; ?></p>
                
                <div class="course-tabs">
                    <div class="tab-nav">
                        <button class="tab-btn active" data-tab="syllabus">Syllabus</button>
                        <button class="tab-btn" data-tab="features">Features</button>
                        <button class="tab-btn" data-tab="requirements">Requirements</button>
                        <button class="tab-btn" data-tab="instructors">Instructors</button>
                    </div>
                    
                    <div class="tab-content active" id="syllabus">
                        <h3>Course Syllabus</h3>
                        <ul>
                            <?php foreach ($courseData['syllabus'] as $item): ?>
                            <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="features">
                        <h3>Course Features</h3>
                        <ul>
                            <?php foreach ($courseData['features'] as $feature): ?>
                            <li><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="requirements">
                        <h3>Requirements</h3>
                        <ul>
                            <li>Basic computer literacy (for beginner courses)</li>
                            <li>Access to a computer with internet connection</li>
                            <li>Required software will be provided or recommended</li>
                            <li>Dedication to complete assignments and practice</li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="instructors">
                        <h3>Instructors</h3>
                        <div class="instructor-card">
                            <img src="/frontend/assets/images/team/team4.jpg" alt="David Rodriguez">
                            <div class="instructor-info">
                                <h4>David Baushi</h4>
                                <p class="instructor-title">Training Director</p>
                                <p>With over 10 years of teaching experience and multiple certifications, David makes complex topics easy to understand.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="course-sidebar">
                <div class="course-card">
                    <?php if (!empty($courseData['image'])): ?>
                    <div class="course-image">
                        <img src="<?php echo $courseData['image']; ?>" alt="<?php echo $courseData['title']; ?>">
                    </div>
                    <?php else: ?>
                    <div class="course-image" style="background-color: #3498db; display: flex; align-items: center; justify-content: center; min-height: 200px;">
                        <h3 style="color: #fff; text-align: center;"><?php echo $courseData['title']; ?></h3>
                    </div>
                    <?php endif; ?>
                    <div class="course-info">
                        <div class="course-meta">
                            <span><i class="fas fa-clock"></i> <?php echo $courseData['duration']; ?></span>
                            <span><i class="fas fa-money-bill-wave"></i> <?php echo $courseData['price']; ?></span>
                            <span><i class="fas fa-user-graduate"></i> <?php echo $courseData['level']; ?></span>
                        </div>
                        
                        <div class="course-actions">
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-primary btn-block">Enroll Now</a>
                            <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-outline btn-block">Make an Enquiry</a>
                        </div>
                        
                        <div class="course-details">
                            <h4>Next Start Dates</h4>
                            <ul class="course-dates">
                                <li>Monday, June 3, 2025</li>
                                <li>Wednesday, July 14, 2025</li>
                                <li>Friday, August 25, 2025</li>
                            </ul>
                            
                            <h4>Course Format</h4>
                            <ul>
                                <li>In-person or online options</li>
                                <li>Twice weekly sessions</li>
                                <li>2 hours per session</li>
                                <li>Maximum 10 students per class</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="course-testimonial">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>"This course transformed how I use MS Office at work. The practical exercises were especially valuable."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="/frontend/assets/images/team/client2.jpg" alt="Michael Ochieng">
                        <div class="author-info">
                            <h4>Michael Ochieng</h4>
                            <p>Course Graduate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="related-courses">
            <h2>Related <span>Courses</span></h2>
            <p>You might also be interested in these courses</p>
            
            <div class="courses-grid">
                <?php
                // Display related courses (excluding current course)
                foreach ($courses as $relatedSlug => $relatedCourse) {
                    if ($relatedSlug !== $slug) {
                        echo '
                        <div class="course-card" data-course="'.$relatedSlug.'">
                            <div class="course-image">
                                '.(!empty($relatedCourse['image']) ? 
                                    '<img src="'.$relatedCourse['image'].'" alt="'.$relatedCourse['title'].'">' : 
                                    '<div style="background-color: #3498db; height: 100%; display: flex; align-items: center; justify-content: center;">
                                        <h3 style="color: #fff; text-align: center; padding: 20px;">'.$relatedCourse['title'].'</h3>
                                    </div>').'
                                <span class="course-level '.strtolower($relatedCourse['level']).'">'.$relatedCourse['level'].'</span>
                            </div>
                            <div class="course-info">
                                <h3>'.$relatedCourse['title'].'</h3>
                                <div class="course-meta">
                                    <span><i class="fas fa-clock"></i> '.$relatedCourse['duration'].'</span>
                                    <span><i class="fas fa-money-bill-wave"></i> '.$relatedCourse['price'].'</span>
                                </div>
                                <p>'.substr($relatedCourse['description'], 0, 100).'...</p>
                                <div class="course-actions">
                                <button>
                                    <a href="'.BASE_URL . APP_ROOT.'/courses/'.$relatedSlug.'" class="btn btn-primary">View Details</a>
                                </button>
                                    <a href="'.BASE_URL . APP_ROOT.'/contact" class="btn btn-outline">Enroll Now</a>
                                
                                </div>
                            </div>
                        </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Enroll in <?php echo $courseData['title']; ?>?</h2>
            <p>Take the next step in your professional development. Spaces are limited in each class.</p>
            <div class="cta-btns">
                <a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="btn btn-primary">Enroll Now</a>
                <a href="tel:+254705444447" class="btn btn-secondary">
                    <i class="fas fa-phone"></i> Call for Info
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Tab functionality
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
    
    // Enquiry button - updated to use the new enquiry page
    const enquiryBtn = document.querySelector('.btn-outline.btn-block');
    if (enquiryBtn && enquiryBtn.textContent.includes('Make an Enquiry')) {
        enquiryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = '<?php echo BASE_URL . APP_ROOT; ?>enquiry?type=course&slug=<?php echo $slug; ?>&title=<?php echo urlencode($courseData['title']); ?>';
        });
    }
});
</script>

<?php include __DIR__ . '/../../partials/footer.php'; ?>