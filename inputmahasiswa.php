<?php require('header.php');?>
    <div class="container">  
    <form action="input-aksi.php" method="post">
        <div class="form group">
            <label for="namaMhsw">NIM</label>
            <input type="text" name="namaMhsw" class="form-control" id="namaMhsw" >
        </div>
        <div class="form group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" >
        </div>
        <div class="form group">
            <label for="date">TTL</label>
            <input type="date" name="date" class="form-control" id="date" >
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 1em;">Submit</button>
    </form>
</div>

<?require('footer.php')?>