<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "thunder_blog";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("An error occurred while connecting to the database. Reason: " . $conn->connect_error);
}

?>