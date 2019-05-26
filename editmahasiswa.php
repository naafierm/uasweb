<?php
include "koneksi.php";
	$nim = $_GET['nim'];

	$result = $conn->query("select * from mahasiswa where NIM=".$nim);
	$datas = [];
	
	while($row=$result->fetch_assoc()){
		$datas[] = $row;
	}
require('header.php');?>
    
 <div class="container">  
    <form action="editmahasiswa-aksi.php" method="post">
            <input type="hidden" value="<?php echo $datas[0]['NIM'];?>" name="nim" class="form-control" id="nim" >
        <div class="form group">
            <label for="namaMhsw">NIM</label>
            <input type="text" value="<?php echo $datas[0]['NIM'];?>" name="namaMhsw" class="form-control" id="namaMhsw" disabled >
        </div>
        <div class="form group">
            <label for="nama">Nama</label>
            <input type="text" value="<?php echo $datas[0]['Nama'];?>" name="nama" class="form-control" id="nama" >
        </div>
        <div class="form group">
            <label for="date">TTL</label>
            <input type="date" value="<?php echo $datas[0]['TTL'];?>"  name="date" class="form-control" id="date" >
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Submit</button>
    </form>
</div>
<?require('footer.php')?>