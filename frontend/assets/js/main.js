// JavaScript for The Hub Computers and Cyber Services Website

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    const mobileNav = document.querySelector('.mobile-navigation');
    const mobileOverlay = document.querySelector('.mobile-overlay');
    const body = document.body;
    
    // Function to open mobile menu
    function openMobileMenu() {
        mobileNav.classList.add('active');
        mobileOverlay.classList.add('active');
        body.classList.add('no-scroll');
        
        // Show close button
        if (mobileMenuClose) {
            mobileMenuClose.style.display = 'block';
        }
    }
    
    // Function to close mobile menu
    function closeMobileMenu() {
        mobileNav.classList.remove('active');
        mobileOverlay.classList.remove('active');
        body.classList.remove('no-scroll');
        
        // Hide close button
        if (mobileMenuClose) {
            mobileMenuClose.style.display = 'none';
        }
    }
    
    // Event listeners for mobile menu
    if (mobileMenuToggle && mobileNav) {
        mobileMenuToggle.addEventListener('click', openMobileMenu);
        
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', closeMobileMenu);
            // Initially hide the close button
            mobileMenuClose.style.display = 'none';
        }
        
        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', closeMobileMenu);
        }
    }
    
    // Close menu when clicking a navigation link
    const navLinks = document.querySelectorAll('.mobile-navigation a');
    if (navLinks.length > 0) {
        navLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    }
    
    // Close menu on ESC key press
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
            closeMobileMenu();
        }
    });
    
    // Header scroll effect
    const header = document.querySelector('.main-header');
    
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
    
    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (mobileNav && mobileNav.classList.contains('active')) {
                    closeMobileMenu();
                }
            }
        });
    });
    
    // WhatsApp button animation
    const whatsappBtn = document.querySelector('.whatsapp-chat');
    
    if (whatsappBtn) {
        // Add pulse animation on page load
        whatsappBtn.classList.add('pulse');
        
        // Remove animation after 5 seconds
        setTimeout(() => {
            whatsappBtn.classList.remove('pulse');
        }, 5000);
        
        // Add animation on hover
        whatsappBtn.addEventListener('mouseenter', function() {
            this.classList.add('pulse');
        });
        
        whatsappBtn.addEventListener('mouseleave', function() {
            this.classList.remove('pulse');
        });
    }
    
    // Testimonial slider functionality
    const testimonialSlider = document.querySelector('.testimonials-slider');
    
    if (testimonialSlider) {
        let isDown = false;
        let startX;
        let scrollLeft;
        
        testimonialSlider.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - testimonialSlider.offsetLeft;
            scrollLeft = testimonialSlider.scrollLeft;
        });
        
        testimonialSlider.addEventListener('mouseleave', () => {
            isDown = false;
        });
        
        testimonialSlider.addEventListener('mouseup', () => {
            isDown = false;
        });
        
        testimonialSlider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - testimonialSlider.offsetLeft;
            const walk = (x - startX) * 2;
            testimonialSlider.scrollLeft = scrollLeft - walk;
        });
        
        // Touch events for mobile
        testimonialSlider.addEventListener('touchstart', (e) => {
            isDown = true;
            startX = e.touches[0].pageX - testimonialSlider.offsetLeft;
            scrollLeft = testimonialSlider.scrollLeft;
        }, { passive: true });
        
        testimonialSlider.addEventListener('touchend', () => {
            isDown = false;
        });
        
        testimonialSlider.addEventListener('touchmove', (e) => {
            if (!isDown) return;
            const x = e.touches[0].pageX - testimonialSlider.offsetLeft;
            const walk = (x - startX) * 2;
            testimonialSlider.scrollLeft = scrollLeft - walk;
        }, { passive: true });
    }
    
    // Service card hover effect for touch devices
    const serviceCards = document.querySelectorAll('.service-card');
    
    if (serviceCards.length > 0) {
        serviceCards.forEach(card => {
            card.addEventListener('touchstart', function() {
                this.classList.toggle('touched');
            }, { passive: true });
        });
    }
    
    // Form validation
    const forms = document.querySelectorAll('form');
    
    if (forms.length > 0) {
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const requiredFields = this.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('error');
                    } else {
                        field.classList.remove('error');
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    
                    // Show error message
                    const errorElement = this.querySelector('.form-error') || document.createElement('div');
                    errorElement.className = 'form-error';
                    errorElement.textContent = 'Please fill in all required fields.';
                    errorElement.style.color = 'var(--error-color)';
                    errorElement.style.marginTop = '15px';
                    
                    if (!this.querySelector('.form-error')) {
                        this.appendChild(errorElement);
                    }
                    
                    // Scroll to first error
                    const firstError = this.querySelector('.error');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            });
        });
    }
    
    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Current year for copyright
    const yearElements = document.querySelectorAll('.current-year');
    
    if (yearElements.length > 0) {
        const currentYear = new Date().getFullYear();
        yearElements.forEach(element => {
            element.textContent = currentYear;
        });
    }
    
    // Animation on scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.service-card, .process-step, .testimonial');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }
    
    // Initialize elements for animation
    const animatedElements = document.querySelectorAll('.service-card, .process-step, .testimonial');
    
    if (animatedElements.length > 0) {
        animatedElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });
        
        window.addEventListener('scroll', animateOnScroll);
        // Trigger once on load
        animateOnScroll();
    }
    
    console.log('The Hub Computers and Cyber Services website scripts loaded successfully.');
});