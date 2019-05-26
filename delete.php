<?php
require('koneksi.php');
$id = $_POST['id'];

$sql = "delete from prestasi where id='". $id."'";

if($conn->query($sql)===TRUE){
    header("Location: index.php");
    exit();
}else{
    echo "Error menghapus data : " . $conn->error;
}

$conn->close();