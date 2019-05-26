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
	?>
	
    <form action="edit-aksi.php" method="post">
		<input name="id" type="hidden" id='id' value="<?php echo $datas[0]['ID'];?>"  >
        <div class="form group">
            <label for="namaMhsw">NIM</label>
            <input type="text" value="<?php echo $datas[0]['NIM'];?>"name="namaMhsw" class="form-control" id="namaMhsw"disabled >
        </div>
        <div class="form group">
            <label for="namaPredikat">Predikat</label>
            <input type="text" value="<?php echo $datas[0]['Predikat'];?>" name="namaPredikat" class="form-control" id="namaPredikat" >
        </div>
        <div class="form group">
            <label for="tingkat">Tingkat</label>
            <input type="text" value="<?php echo $datas[0]['Tingkat'];?>" name="tingkat" class="form-control" id="tingkat" >
        </div>
        <div class="form group">
            <label for="tahun">Tahun</label>
            <input type="text" value="<?php echo $datas[0]['Tahun'];?>" name="tahun" class="form-control" id="tahun" >
        </div>
        <div class="form group">
            <label for="kegiatan">Kegiatan</label>
            <textarea class="form-control" value="<?php echo $datas[0]['Kegiatan'];?>" name="kegiatan" id="kegiatan" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Submit</button>
    </form>

</div>
<?php require('footer.php'); ?>