<?php
$serveername ='localhost'
$username = 'root';
$password = '';
$dbname = uasweb;
$conn = new mysqli($db_host,$db_usn,$db_pwd,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";
?>