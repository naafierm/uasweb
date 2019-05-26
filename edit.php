<?php
require('header.php'); ?>
<div class="container">
	<?php
	include "koneksi.php";
	$id = $_GET['id'];

	$result = $conn->query("select * from prestasi where id=".$id);
	$datas = [];
	
	while($row=$result->fetch_assoc()){
		$datas[] = $row;
	}

	echo $datas[0]['ID'];

	?>
</div>
<?php require('footer.php'); ?>