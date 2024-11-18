<?php 
// make connection to database

$host = "localhost";
$user = "root";
$pass = "";
$db = "siakad_averroes";

// library yang menghubungkan php ke mysql
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>