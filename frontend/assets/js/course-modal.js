document.addEventListener('DOMContentLoaded', function() {
    // Course data
    const courses = {
        'ms-office': {
            title: 'MS Office Package',
            image: '/frontend/assets/images/courses/ms-office.jpg',
            duration: '4 Weeks',
            price: '$199',
            level: 'Beginner',
            description: 'Master Microsoft Word, Excel, PowerPoint, and Outlook for professional use. This comprehensive course covers all essential features of the MS Office suite, helping you become proficient in creating professional documents, spreadsheets, presentations, and managing emails efficiently.',
            syllabus: [
                'Introduction to MS Office Interface',
                'Word: Document formatting and styles',
                'Word: Tables, images, and advanced features',
                'Excel: Formulas and basic functions',
                'Excel: Charts and data visualization',
                'PowerPoint: Creating effective presentations',
                'Outlook: Email management and calendar',
                'Integration between Office applications'
            ]
        },
        'basic-computing': {
            title: 'Basic Computing',
            image: '/frontend/assets/images/courses/basic-computing.jpg',
            duration: '6 Weeks',
            price: '$249',
            level: 'Beginner',
            description: 'Essential computer skills for beginners, including internet, email, and file management. This course is perfect for those new to computers or wanting to improve their fundamental skills for personal or professional use.',
            syllabus: [
                'Computer hardware and software basics',
                'Operating system fundamentals',
                'File and folder management',
                'Word processing essentials',
                'Internet basics and web browsing',
                'Email setup and usage',
                'Online safety and security',
                'Introduction to cloud storage'
            ]
        },
        'cyber-security': {
            title: 'Cyber Security Basics',
            image: '/frontend/assets/images/courses/cyber-security.jpg',
            duration: '8 Weeks',
            price: '$349',
            level: 'Intermediate',
            description: 'Learn how to protect yourself and your business from online threats and attacks. This course provides practical knowledge about cybersecurity threats and how to defend against them in both personal and professional contexts.',
            syllabus: [
                'Introduction to cybersecurity threats',
                'Password management and authentication',
                'Securing personal devices',
                'Network security fundamentals',
                'Recognizing phishing and social engineering',
                'Data protection and privacy',
                'Secure web browsing practices',
                'Incident response basics'
            ]
        },
        'advanced-excel': {
            title: 'Advanced Excel',
            image: '/frontend/assets/images/courses/advanced-excel.jpg',
            duration: '5 Weeks',
            price: '$299',
            level: 'Advanced',
            description: 'Master advanced Excel functions, macros, pivot tables, and data analysis techniques. This course is designed for those who already know Excel basics and want to take their skills to the professional level.',
            syllabus: [
                'Advanced formulas and functions',
                'Data validation and conditional formatting',
                'Pivot tables and advanced data analysis',
                'Macros and VBA basics',
                'Data visualization techniques',
                'Advanced charting options',
                'Power Query and Power Pivot',
                'Automating repetitive tasks'
            ]
        },
        'web-development': {
            title: 'Web Development',
            image: '/frontend/assets/images/courses/web-development.jpg',
            duration: '10 Weeks',
            price: '$499',
            level: 'Intermediate',
            description: 'Learn HTML, CSS, JavaScript and build responsive websites from scratch. This hands-on course takes you from beginner to capable front-end developer, teaching you how to create modern, responsive websites.',
            syllabus: [
                'HTML5 and semantic markup',
                'CSS3 and responsive design',
                'Flexbox and CSS Grid',
                'JavaScript fundamentals',
                'DOM manipulation',
                'Introduction to jQuery',
                'Bootstrap framework',
                'Website deployment'
            ]
        },
        'graphic-design': {
            title: 'Graphic Design',
            image: '/frontend/assets/images/courses/graphic-design.jpg',
            duration: '8 Weeks',
            price: '$399',
            level: 'Intermediate',
            description: 'Master Adobe Photoshop, Illustrator and design principles for professional results. This course combines technical software skills with fundamental design theory to create visually appealing graphics.',
            syllabus: [
                'Design principles and color theory',
                'Adobe Photoshop basics',
                'Photo editing and manipulation',
                'Adobe Illustrator basics',
                'Vector graphics creation',
                'Typography and layout design',
                'Logo design principles',
                'Creating print and digital assets'
            ]
        }
    };

    // Modal elements
    const modal = document.getElementById('courseModal');
    const modalTitle = document.getElementById('modalCourseTitle');
    const modalImage = document.getElementById('modalCourseImage');
    const modalDuration = document.getElementById('modalCourseDuration');
    const modalPrice = document.getElementById('modalCoursePrice');
    const modalLevel = document.getElementById('modalCourseLevel');
    const modalDescription = document.getElementById('modalCourseDescription');
    const modalSyllabus = document.getElementById('modalCourseSyllabus');
    const closeButtons = document.querySelectorAll('.modal-close, .modal-close-btn');

    // Open modal with course data
    document.querySelectorAll('.course-details-btn').forEach(button => {
        button.addEventListener('click', function() {
            const courseId = this.closest('.course-card').dataset.course;
            const course = courses[courseId];
            
            if (course) {
                modalTitle.textContent = course.title;
                modalImage.src = course.image;
                modalImage.alt = course.title;
                modalDuration.textContent = course.duration;
                modalPrice.textContent = course.price;
                modalLevel.textContent = course.level;
                modalDescription.textContent = course.description;
                
                // Build syllabus list
                modalSyllabus.innerHTML = '<h3>Course Syllabus</h3><ul></ul>';
                const syllabusList = modalSyllabus.querySelector('ul');
                
                course.syllabus.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    syllabusList.appendChild(li);
                });
                
                // Show modal
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // Close modal
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    });

    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Course filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
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