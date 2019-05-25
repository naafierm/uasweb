<?php
$servername ='localhost';
$username = 'aoki';
$password = 'anangaja';
$dbname = 'uasweb';
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>