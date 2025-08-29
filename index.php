<?php
session_start();

// Define base paths
define('BASE_PATH', __DIR__);
define('BASE_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]");
define('APP_ROOT', '/the-hub-website'); // Add this line

// Get the requested URL
$request = isset($_GET['url']) ? $_GET['url'] : 'home';

// Route the request
switch ($request) {
    case '':
    case 'home':
        require __DIR__ . '/frontend/views/home.php';
        break;
    case 'services':
        require __DIR__ . '/frontend/views/services/index.php';
        break;
    case 'courses':
        require __DIR__ . '/frontend/views/courses/index.php';
        break;
    case 'team':
        require __DIR__ . '/frontend/views/team.php';
        break;
    case 'projects':
        require __DIR__ . '/frontend/views/projects.php';
        break;
    case 'contact':
        require __DIR__ . '/frontend/views/contact.php';
        break;
    case 'faq':
        require __DIR__ . '/frontend/views/faq.php';
        break;
    case 'login':
        require __DIR__ . '/frontend/views/auth/login.php';
        break;
    case 'register':
        require __DIR__ . '/frontend/views/auth/register.php';
        break;
    default:
        if (preg_match('/^services\/(.+)/', $request, $matches)) {
            $_GET['slug'] = $matches[1];
            require __DIR__ . '/frontend/views/services/[slug].php';
        } 
        elseif (preg_match('/^courses\/(.+)/', $request, $matches)) {
            $_GET['slug'] = $matches[1];
            require __DIR__ . '/frontend/views/courses/[slug].php';
        }
        else {
            http_response_code(404);
            require __DIR__ . '/frontend/views/404.php';
        }
        break;
}
?>