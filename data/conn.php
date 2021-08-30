<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, 'project_11');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
}


