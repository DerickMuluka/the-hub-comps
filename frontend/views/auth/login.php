<?php
$pageTitle = "Login";
$pageSpecificCSS = "auth.css";
include __DIR__ . '/../../partials/header.php';
?>

<!-- Auth Hero -->
<section class="page-hero auth-hero">
    <div class="container">
        <h1>Member <span>Login</span></h1>
        <p>Access your account to manage services and courses</p>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Auth Main Section -->
<section class="auth-main">
    <div class="container">
        <div class="auth-container">
            <div class="auth-form">
                <h2>Welcome Back</h2>
                <p>Sign in to your account to continue</p>
                
                <form id="loginForm" action="<?php echo BASE_URL . APP_ROOT; ?>/backend/api/auth.php" method="POST">
                    <input type="hidden" name="action" value="login">
                    
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
                    </div>
                    
                    <div class="form-group remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                        <a href="<?php echo BASE_URL . APP_ROOT; ?>/forgot-password" class="forgot-password">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    
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
                        Don't have an account? <a href="<?php echo BASE_URL . APP_ROOT; ?>/register">Sign up</a>
                    </div>
                </form>
            </div>
            
            <div class="auth-image">
                <img src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/images/auth/login.jpg" alt="Login">
                <div class="auth-image-overlay">
                    <h3>Why Register?</h3>
                    <ul>
                        <li>Track your service requests</li>
                        <li>Manage your course enrollments</li>
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
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                e.preventDefault();
                alert('Please fill in all fields');
                return;
            }
        });
    }
});
</script>

<?php include __DIR__ . '/../../partials/footer.php'; ?>
