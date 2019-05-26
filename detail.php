<?php require('header.php'); ?>
<div class="container">

    <?php
    require('koneksi.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $q = $_GET['q'];
    $sql_data = "select * from mahasiswa where NIM='" . $q . "';";
    $sql_prestasi = "select * from prestasi where NIM='" . $q . "';";

    $result_data = $conn->query($sql_data);
    $result_prestasi = $conn->query($sql_prestasi);
    ?>
    <div class="row">
        <div class="col-sm-10">
        <table>
            <tbody>

            <?php
            $datas = [];

            while ($row = $result_data->fetch_assoc()) {
                $datas[] = $row;
            }
            ?>
                
            <tr>
                <td>Nama</td>
                <td> &nbsp;:&nbsp;</td>
                <td><?php echo $datas[0]['Nama'] ?></td>
            <tr>
            <tr>
                <td>NIM</td>
                <td> &nbsp;:&nbsp;</td>
                <td><?php echo $datas[0]['NIM'] ?></td>
            <tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td> &nbsp;:&nbsp;</td>
                <td><?php echo $datas[0]['TTL'] ?></td>
            <tr>

            </tbody>
        </table>
    </div>

    <div class="col-sm-2" style="padding-top:20px">
        <button class='btn btn-primary'>Edit</button>
    </div> 
    </div>

    <table class="table">
        <thead class="thead-light">
            <th class="text-center">Predikat</th>
            <th class="text-center">Tingkat</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Kegiatan</th>
            <th class="text-center">Aksi</th>
        </thead>
        <tbody>
            <?php
            while ($row = $result_prestasi->fetch_assoc()) {
                echo "<tr>
        <td class='text-center'>" . $row['Predikat'] . "</td>
        <td class='text-center'>" . $row['Tingkat'] . "</td>
        <td class='text-center'>" . $row['Tahun'] . "</td>
        <td class='text-center'>" . $row['Kegiatan'] . "</td>
        <td class='text-center'> <button class='btn btn-danger' onclick='hapus(" . $row['ID'] . ",`" . $row['Predikat'] . "`,`" . $row['Kegiatan'] . "`,`" . $datas[0]['Nama'] . "`)'>Hapus</button> 
                    <button class=' btn btn-primary'>Edit</button></td>
        </tr>
    ";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

</div>
<!-- MODAL -->
<div id="modalDelete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   <p id="displayKeterangan"></p> 
                </div>

                <!-- Modal footer -->
                <div id="deleteOption" class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                </div>

            </div>
        </div>
    </div>
<?php require('footer.php') ?>