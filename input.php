<?php require('header.php');?>

    <form action="input-aksi.php" method="post">
        <div class="form group">
            <label for="namaMhsw">Nama Mahasiswa</label>
            <input type="text" name="namaMhsw" class="form-control" id="namaMhsw" >
        </div>
        <div class="form group">
            <label for="namaPredikat">Predikat</label>
            <input type="text" class="form-control" id="namaPredikat" >
        </div>
        <div class="form group">
            <label for="tingkat">Tingkat</label>
            <input type="text" class="form-control" id="tingkat" >
        </div>
        <div class="form group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" id="tahun" >
        </div>
        <div class="form group">
            <label for="kegiatan">Kegiatan</label>
            <textarea class="form-control" name="kegiatan" id="kegiatan" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


<?require('footer.php')?>