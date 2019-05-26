<?php
require('header.php'); ?>
<div class="container">
	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn, "SELECT * FROM prestasi WHERE id=$id;") or die(mysqli_error($conn));

	?>
</div>
<?php require('footer.php'); ?>