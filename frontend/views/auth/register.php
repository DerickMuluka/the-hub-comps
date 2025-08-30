<?php
$pageTitle = "Register";
$pageSpecificCSS = "auth.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Auth Hero -->
<section class="page-hero auth-hero">
    <div class="container">
        <h1>Create <span>Account</span></h1>
        <p>Join The Hub to access our services and courses</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Auth Main Section -->
<section class="auth-main">
    <div class="container">
        <div class="auth-container">
            <div class="auth-form">
                <h2>Get Started</h2>
                <p>Create your account in just a few steps</p>
                
                <form id="registerForm" action="/backend/api/auth.php" method="POST">
                    <input type="hidden" name="action" value="register">
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                        <div class="password-toggle">
                            <i class="fas fa-eye"></i>
                        </div>
                        <small class="form-text">Minimum 8 characters with at least one number</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                        <div class="password-toggle">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    
                    <div class="form-check">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree to the <a href="/terms">Terms of Service</a> and <a href="/privacy">Privacy Policy</a></label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                    
                    <div class="auth-divider">
                        <span>or</span>
                    </div>
                    
                    <div class="social-login">
                        <button type="button" class="btn btn-social btn-google">
                            <i class="fab fa-google"></i> Continue with Google
                        </button>
                        <button type="button" class="btn btn-social btn-facebook">
                            <i class="fab fa-facebook-f"></i> Continue with Facebook
                        </button>
                    </div>
                    
                    <div class="auth-footer">
                        Already have an account? <a href="/login">Sign in</a>
                    </div>
                </form>
            </div>
            
            <div class="auth-image">
                <img src="/frontend/assets/images/auth/register.jpg" alt="Register">
                <div class="auth-image-overlay">
                    <h3>Why Register?</h3>
                    <ul>
                        <li>Track your course progress</li>
                        <li>Manage service requests</li>
                        <li>Access exclusive resources</li>
                        <li>Get personalized recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Password toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const passwordToggles = document.querySelectorAll('.password-toggle');
    
    passwordToggles.forEach(toggle => {
        const input = toggle.previousElementSibling;
        toggle.addEventListener('click', function() {
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';
            this.innerHTML = isPassword ? '<i class="fas fa-eye-slash"></i>' : '<i class="fas fa-eye"></i>';
        });
    });
    
    // Form validation
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            // Check password match
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match');
                return;
            }
            
            // Check password strength
            if (password.length < 8 || !/\d/.test(password)) {
                e.preventDefault();
                alert('Password must be at least 8 characters long and contain at least one number');
                return;
            }
            
            // Check terms agreement
            if (!document.getElementById('terms').checked) {
                e.preventDefault();
                alert('You must agree to the terms and conditions');
                return;
            }
        });
    }
});
</script>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
