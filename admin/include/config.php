<?php
// Set up the database connection
$dsn = 'mysql:host=localhost;dbname=hotel_2';
$username = 'root';
$password = '';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo "DATA BASE CONNECTION ERROR </br>";
    echo $error_message;
    exit();
}
?>