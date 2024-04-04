<?php
$host = 'localhost'; // Your database host (usually 'localhost')
$dbname = 'student_check'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>