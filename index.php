<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 * 
 * This file redirects all requests to the Laravel public directory.
 */

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get the requested URI
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Log the request URI
error_log("Request URI: " . $_SERVER['REQUEST_URI']);
error_log("Parsed URI: " . $uri);

// Check if this is a direct file request
$file_extensions = ['.php', '.html', '.htm', '.css', '.js', '.jpg', '.jpeg', '.png', '.gif', '.ico', '.svg', '.txt'];
$is_direct_file = false;

foreach ($file_extensions as $ext) {
    if (strpos($uri, $ext) !== false) {
        $is_direct_file = true;
        break;
    }
}

// If it's a direct file request, don't forward to Laravel
if ($is_direct_file && $uri !== '/public_html/index.php') {
    // Remove /public_html/ from the URI
    $clean_uri = str_replace('/public_html/', '', $uri);
    $file_path = __DIR__ . '/' . $clean_uri;
    
    error_log("Direct file request for: " . $file_path);
    
    if (file_exists($file_path)) {
        error_log("File exists, returning directly");
        return false;
    }
}

// Serve static file if requested directly
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    error_log("Serving static file: " . __DIR__.'/public'.$uri);
    return false;
}

error_log("Forwarding to public/index.php");
require_once __DIR__.'/public/index.php';
