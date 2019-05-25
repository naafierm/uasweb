<?php require('header.php');?>
        <title>Input Data Prestasi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
<body>
    <form action="input-aksi.php" method="post">
        <div class="form group">
            <label for="namaMhsw">Nama Mahasiswa</label>
            <input type="nmMhsw" class="form-control" id="namaMhsw" >
        </div>
        <div class="form group">
            <label for="namaPredikat">Predikat</label>
            <input type="namaPredikat" class="form-control" id="namaPredikat" >
        </div>
        <div class="form group">
            <label for="tingkat">Tingkat</label>
            <input type="tingkat" class="form-control" id="tingkat" >
        </div>
        <div class="form group">
            <label for="tahun">tTahun</label>
            <input type="tahun" class="form-control" id="tahun" >
        </div>
        <div class="form group">
            <label for="kegiatan">Kegiatan</label>
            <textarea class="form-control" id="kegiatan" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
<?require('footer.php')?>