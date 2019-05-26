<?php
include 'koneksi.php';
$NIM = $_POST['nim'];
$nama = $_POST['nama'];
$TTL = $_POST['date'];

$query="UPDATE `mahasiswa` SET `Nama` = '$nama', `TTL` = '$TTL' WHERE `mahasiswa`.`NIM` = $NIM";
mysqli_query($conn, $query) or die(mysqli_error($conn));
header('location:lihatmhs.php');
?>
