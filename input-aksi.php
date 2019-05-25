<?php 
include 'koneksi.php';
$nama = $_POST['namaMhsw'];
$predikat = $_POST['namaPredikat'];
$tingkat = $_POST['tingkat'];
$tahun = $_POST['tahun'];
$kegiatan = $_POST['kegiatan'];

$query="INSERT INTO uasweb  (namaMhsw, predikat, tingkat, tahun, kegiatan) VALUES('$nama','$predikat','$tingkat','$tahun','$kegiatan')";

mysqli_query($conn, $query) or die(mysqli_error($conn));
header("location:index.php?pesan=update");
?>