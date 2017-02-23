<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$servername = "us-cdbr-azure-southcentral-f.cloudapp.net";
$username = "b1f5a0707ed7d6";
$password = "89ac8c94";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
