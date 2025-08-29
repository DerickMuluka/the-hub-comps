<?php
$pageTitle = "Frequently Asked Questions";
$pageSpecificCSS = "faq.css";
include __DIR__ . '/../partials/header.php';
?>

<!-- FAQ Hero -->
<section class="page-hero faq-hero">
    <div class="container">
        <h1>Frequently Asked <span>Questions</span></h1>
        <p>Find answers to common questions about our services and courses</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- FAQ Main Section -->
<section class="faq-main">
    <div class="container">
        <div class="faq-container">
            <h2 class="section-title">Common <span>Questions</span></h2>
            <p class="section-subtitle">Can't find what you're looking for? <a href="/contact">Contact us</a> directly for more information.</p>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What services do you offer?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>We offer a comprehensive range of IT services including computer repair, cyber security solutions, network setup and maintenance, data recovery, web development, and IT consulting. Our services are tailored to meet both personal and business needs.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much do your courses cost?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>Our course prices vary depending on the program and duration. Basic courses start at $199, while more advanced or specialized programs can cost up to $499. We also offer package deals for multiple courses and corporate training discounts.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you offer remote support?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide remote support for many software-related issues. Our technicians can securely connect to your computer to diagnose and fix problems without the need for an in-person visit. For hardware issues, we offer both mail-in and on-site service options.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What are your business hours?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>Our standard business hours are Monday to Friday from 9:00 AM to 6:00 PM, and Saturdays from 10:00 AM to 4:00 PM. We're closed on Sundays and public holidays. Emergency support may be available outside these hours for existing business clients.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does computer repair typically take?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>Repair times vary depending on the issue. Many software problems can be resolved within 2-4 hours, while hardware repairs may take 1-3 business days depending on parts availability. We offer priority service for an additional fee that guarantees same-day or next-day completion.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you provide certificates for your courses?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, all our courses include a certificate of completion that you can add to your resume or LinkedIn profile. For certain professional certification programs, we also prepare students for official certification exams (additional fees may apply for exam vouchers).</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What payment methods do you accept?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>We accept all major credit cards (Visa, MasterCard, American Express), PayPal, bank transfers, and cash. For business clients, we can also set up monthly invoicing with net-30 terms upon credit approval.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you offer warranties on your services?</h3>
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, we stand behind our work. Most repairs come with a 90-day warranty. Software services have a 30-day warranty period. For hardware parts we install, we provide the manufacturer's warranty (typically 1 year) in addition to our labor warranty.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// FAQ toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>
