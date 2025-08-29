document.addEventListener('DOMContentLoaded', function() {
    // Animate hero content
    const heroContent = document.querySelector('.hero-content');
    if (heroContent) {
        heroContent.classList.add('animate__animated', 'animate__fadeIn');
    }
    
    // Animate service cards on scroll
    const serviceCards = document.querySelectorAll('.service-card');
    if (serviceCards.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    }, index * 100);
                }
            });
        }, { threshold: 0.1 });
        
        serviceCards.forEach(card => {
            observer.observe(card);
        });
    }
    
    // Animate course cards
    const courseCards = document.querySelectorAll('.course-card');
    if (courseCards.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate__animated', 'animate__fadeIn');
                    }, index * 150);
                }
            });
        }, { threshold: 0.1 });
        
        courseCards.forEach(card => {
            observer.observe(card);
        });
    }
    
    // Animate team members
    const teamMembers = document.querySelectorAll('.team-member');
    if (teamMembers.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate__animated', 'animate__fadeIn');
                    }, index * 200);
                }
            });
        }, { threshold: 0.1 });
        
        teamMembers.forEach(member => {
            observer.observe(member);
        });
    }
    
    // Parallax effect for hero section
    const hero = document.querySelector('.hero');
    if (hero) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            hero.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });
    }
});