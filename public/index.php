<?php
// Main entry point for the portfolio website

// Start output buffering
ob_start();

// Include configuration and helper functions
require_once __DIR__ . '/../app/helpers/functions.php';

// Include header meta tags
require_once __DIR__ . '/../app/includes/meta.php';

// Include body opening tag
require_once __DIR__ . '/../app/includes/header.php';

// Include intro screen
include __DIR__ . '/../app/sections/intro.php';

// Include navigation
require_once __DIR__ . '/../app/includes/navbar.php';

// Include page sections
include __DIR__ . '/../app/sections/hero.php';
include __DIR__ . '/../app/sections/about.php';
include __DIR__ . '/../app/sections/skills.php';
include __DIR__ . '/../app/sections/projects.php';
include __DIR__ . '/../app/sections/contact.php';

// Include footer
require_once __DIR__ . '/../app/includes/footer.php';

// Flush output buffer
ob_end_flush();
?>
<link rel="stylesheet" href="/portfolio/public/assets/css/style.css">
