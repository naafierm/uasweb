<?php
include 'koneksi.php';
$NIM = $_POST['namaMhsw'];
$nama = $_POST['nama'];
$TTL = $_POST['date'];

$query="INSERT INTO `mahasiswa` (`NIM`, `Nama`, `TTL`) VALUES ('$NIM', '$nama', '$TTL')";

mysqli_query($conn, $query) or die (mysqli_error($conn));
header("location:lihatmhs.php");
?>