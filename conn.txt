<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "thunder_blog";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->ping())
{
    echo "Success connecting to the database.";
}

else {
    echo "An error occurred while connecting to the database. Reason: " . $conn->connect_error;
}

?>