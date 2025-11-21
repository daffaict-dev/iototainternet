<?php
// Turn on all error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP Version: " . phpversion() . "<br>";
echo "Testing basic PHP...<br>";

// Test session
session_start();
echo "Session: OK<br>";

// Test SQLite
try {
    $pdo = new PDO('sqlite:db.sqlite');
    echo "SQLite: OK<br>";
} catch (Exception $e) {
    echo "SQLite Error: " . $e->getMessage() . "<br>";
}

// Test directory permissions
if (!is_dir('firmware')) {
    mkdir('firmware', 0755, true);
    echo "Created firmware directory<br>";
} else {
    echo "Firmware directory: OK<br>";
}

echo "Debug completed!";
?>