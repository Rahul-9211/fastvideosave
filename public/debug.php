<?php
// Show all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Laravel Debug Page</h1>";

// Check if .env file exists
echo "<h2>Checking .env file:</h2>";
if (file_exists(__DIR__ . '/../.env')) {
    echo "<p style='color:green'>.env file exists</p>";
    echo "<pre>" . htmlspecialchars(file_get_contents(__DIR__ . '/../.env')) . "</pre>";
} else {
    echo "<p style='color:red'>.env file does not exist!</p>";
}

// Check storage directory permissions
echo "<h2>Checking storage directory permissions:</h2>";
$storage_path = __DIR__ . '/../storage';
echo "Storage path: " . $storage_path . "<br>";
echo "Is writable: " . (is_writable($storage_path) ? 'Yes' : 'No') . "<br>";

$logs_path = $storage_path . '/logs';
echo "Logs path: " . $logs_path . "<br>";
echo "Is writable: " . (is_writable($logs_path) ? 'Yes' : 'No') . "<br>";

// Check for required PHP extensions
echo "<h2>Checking PHP extensions:</h2>";
$required_extensions = ['PDO', 'pdo_mysql', 'openssl', 'mbstring', 'tokenizer', 'xml', 'ctype', 'json', 'bcmath'];
foreach ($required_extensions as $ext) {
    echo $ext . ": " . (extension_loaded($ext) ? 'Loaded' : 'Not loaded') . "<br>";
}

// Check bootstrap/cache directory
echo "<h2>Checking bootstrap/cache directory:</h2>";
$bootstrap_cache = __DIR__ . '/../bootstrap/cache';
echo "Bootstrap/cache path: " . $bootstrap_cache . "<br>";
echo "Is writable: " . (is_writable($bootstrap_cache) ? 'Yes' : 'No') . "<br>";

// Check APP_KEY in .env
echo "<h2>Checking APP_KEY:</h2>";
if (file_exists(__DIR__ . '/../.env')) {
    $env_content = file_get_contents(__DIR__ . '/../.env');
    preg_match('/APP_KEY=(.*)/', $env_content, $matches);
    if (isset($matches[1]) && !empty($matches[1])) {
        echo "<p style='color:green'>APP_KEY is set: " . htmlspecialchars($matches[1]) . "</p>";
    } else {
        echo "<p style='color:red'>APP_KEY is not set or empty!</p>";
    }
}

echo "<h2>PHP Version:</h2>";
echo phpversion();
?> 