<?php
// Database configuration
$host = 'localhost';           // Default XAMPP host
$db_user = 'root';             // Default XAMPP user
$db_pass = '';                 // Default XAMPP password (empty)
$db_name = 'event_booking_system'; // Database name created earlier

// Create connection
$conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: Set charset
mysqli_set_charset($conn, 'utf8');
?>
