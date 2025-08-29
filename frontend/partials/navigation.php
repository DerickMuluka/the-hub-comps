<ul>
    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' || (isset($request) && $request == 'home')) ? 'active' : '' ?>">Home</a></li>
    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/services" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'services') !== false) ? 'active' : '' ?>">Services</a></li>
    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/courses" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'courses') !== false) ? 'active' : '' ?>">Courses</a></li>
    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/team" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'team') !== false) ? 'active' : '' ?>">Our Team</a></li>
    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/projects" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'projects') !== false) ? 'active' : '' ?>">Projects</a></li>
    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/contact" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'contact') !== false) ? 'active' : '' ?>">Contact</a></li>
    <li><a href="<?php echo BASE_URL . APP_ROOT; ?>/faq" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'faq') !== false) ? 'active' : '' ?>">FAQ</a></li>
</ul>