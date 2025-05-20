<?php
// Database connection details
$host = 'localhost';  // Database server (local server)
$db = 'rex_lab_db';   // Database name
$user = 'root';       // Database username (usually 'root' in local servers)
$pass = '';           // Database password (usually empty for local servers)

try {
    // Create a PDO connection to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error handling
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
