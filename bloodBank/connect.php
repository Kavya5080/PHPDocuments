<?php
$servername = "localhost";
$username = "phpmyadmin";
$password1 = "Shree@123";
$dbname = "bloodBank";
// Create connection
$conn = new mysqli($servername, $username, $password1, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
