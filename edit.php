<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn, "SELECT * FROM  WHERE id='$id'")or die(mysqli_error($conn));
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<input class="btn btn-primary" type="submit" value="Submit">
	<?require('footer.php')?>