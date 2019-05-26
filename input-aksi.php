<?php 
include 'koneksi.php';
$nama = $_POST['namaMhsw'];
$predikat = $_POST['namaPredikat'];
$tingkat = $_POST['tingkat'];
$tahun = $_POST['tahun'];
$kegiatan = $_POST['kegiatan'];

$query="INSERT INTO `prestasi` (`ID`, `Predikat`, `Tingkat`, `Tahun`, `Kegiatan`, `NIM`) VALUES (NULL, '$predikat', '$tingkat', '$tahun', '$kegiatan', '$nama')";

mysqli_query($conn, $query) or die(mysqli_error($conn));
header("location:index.php");
?>