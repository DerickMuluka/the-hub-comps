    <!-- Footer Section -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>The HubComps</h3>
                    <p>Providing top-notch computer repair, cyber security services, IT solutions, and computer training since 2021. We're committed to delivering excellence in every service we offer.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/">Home</a></li>
                    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/services">Services</a></li>
                    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses">Courses</a></li>
                    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/team">Our Team</a></li>
                    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/projects">Projects</a></li>
                    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/contact">Contact</a></li>
                    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/faq">FAQ</a></li>
                    </ul>
                </div>
                
                <div class="footer-services">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/services/computer-repair">Computer Repair</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/services/cyber-security">Cyber Security</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/services/network-solutions">Network Solutions</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/services/data-recovery">Data Recovery</a></li>
                    </ul>
                    
                    <h3 class="mt-4">Our Courses</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/ms-office">MS Office Package</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/basic-computing">Basic Computing</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/cyber-security">Cyber Security Basics</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/web-development">Web Development</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/advanced-excel">Advanced Excel</a></li>
                        <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses/graphic-design">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i>AIRPORT ROAD OFF MKOMANI JUNCTION NEAR BOMU HOSPITAL, Mombasa</li>
                        <li><i class="fas fa-phone"></i> +254 705 444 447 
                    </li>
                        <li><i class="fas fa-envelope"></i> info.thehubcomps@gmail.com</li>
                        <li><i class="fas fa-clock"></i> Mon-Fri: 8AM - 9PM</li>
                        <li><i class="fas fa-clock"></i> Sat & Sun: 10AM - 9PM</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> The Hub Computers and Cyber Services. All Rights Reserved.</p>
                <div class="footer-legal">
                    <a href="/privacy">Privacy Policy</a>
                    <a href="/terms">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Course Modal -->
    <?php include __DIR__ . '/course-modal.php'; ?>
    
    <!-- Scripts -->
    <script src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/js/main.js"></script>
    <script src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/js/whatsapp.js"></script>
    <?php if (isset($pageSpecificJS)): ?>
        <script src="<?php echo BASE_URL . APP_ROOT; ?>/frontend/assets/js/<?php echo $pageSpecificJS; ?>"></script>
    <?php endif; ?>
</body>
</html>