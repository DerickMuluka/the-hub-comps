document.addEventListener('DOMContentLoaded', function() {
    const whatsappBtn = document.querySelector('.whatsapp-btn');
    
    if (whatsappBtn) {
        // Set your WhatsApp number (with country code but without + sign)
        const whatsappNumber = "254705444447";
        
        // Default message
        let message = "Hello The Hub Computers, I need information about your services";
        
        // Change message based on page
        const pageTitle = document.title;
        
        if (pageTitle.includes("Services") || window.location.pathname.includes("services")) {
            message = "Hello The Hub Computers, I'm interested in your services. Can you provide more information?";
        } else if (pageTitle.includes("Courses") || window.location.pathname.includes("courses")) {
            message = "Hello The Hub Computers, I'd like to inquire about your courses. Can you send me details?";
        } else if (pageTitle.includes("Contact") || window.location.pathname.includes("contact")) {
            message = "Hello The Hub Computers, I have a question for your team.";
        } else if (pageTitle.includes("Computer Repair") || window.location.pathname.includes("computer-repair")) {
            message = "Hello The Hub Computers, I need computer repair services. Can you help me?";
        } else if (pageTitle.includes("Cyber Security") || window.location.pathname.includes("cyber-security")) {
            message = "Hello The Hub Computers, I'm interested in your cyber security services.";
        } else if (pageTitle.includes("Team") || window.location.pathname.includes("team")) {
            message = "Hello The Hub Computers, I'd like to learn more about your team.";
        }
        
        // Encode the message for URL
        const encodedMessage = encodeURIComponent(message);
        
        // Update the WhatsApp button href
        whatsappBtn.href = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
        
        // Add click event for analytics (optional)
        whatsappBtn.addEventListener('click', function() {
            // You can add analytics tracking here
            console.log('WhatsApp button clicked from: ' + pageTitle);
        });
    }
    
    // Add animation to WhatsApp button
    const whatsappChat = document.querySelector('.whatsapp-chat');
    if (whatsappChat) {
        // Pulse animation
        setInterval(() => {
            whatsappChat.classList.add('pulse');
            setTimeout(() => {
                whatsappChat.classList.remove('pulse');
            }, 600);
        }, 10000);
    }
});