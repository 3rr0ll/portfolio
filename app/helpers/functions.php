<?php
/**
 * Helper Functions
 * 
 * Utility functions used throughout the application
 */

/**
 * Escape HTML output
 * 
 * @param string $string The string to escape
 * @return string Escaped string
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Get the current page name
 * 
 * @return string Current page name
 */
function get_current_page() {
    return basename($_SERVER['PHP_SELF']);
}

/**
 * Check if current page matches
 * 
 * @param string $page Page name to check
 * @return bool True if matches
 */
function is_current_page($page) {
    return get_current_page() === $page;
}

/**
 * Truncate string to specified length
 * 
 * @param string $string The string to truncate
 * @param int $length Maximum length
 * @param string $suffix Suffix to append if truncated
 * @return string Truncated string
 */
function truncate($string, $length = 100, $suffix = '...') {
    if (strlen($string) <= $length) {
        return $string;
    }
    return substr($string, 0, $length) . $suffix;
}

