<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['namaMhsw'];
$predikat = $_POST['namaPredikat'];
$tingkat = $_POST['tingkat'];
$tahun = $_POST['tahun'];
$kegiatan = $_POST['kegiatan'];

$query="UPDATE uasweb SET namaMhsw='$nama', predikat='$predikat', tingkat='$tingkat', tahun='$tahun', kegiatan='$kegiatan' WHERE id='$id'";

mysqli_query($conn, $query) or die(mysqli_error($conn));

header("location:index.php?pesan=update");
?>