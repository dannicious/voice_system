<?php


// Database credentials
$host = "localhost";       //  localhost
$db_name = "voice_system"; // database name
$username = "root";        // MySQL username 
$password = "";            // MySQL password 

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->set_charset("utf8");

//echo "Connected successfully!";


?>
