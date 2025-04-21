<?php
$host = 'localhost';
$db = 'u-240106205_vkitchen'; 
$user = 'u-240106205';
$pass = 'sck54b5O3RaNonH';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
