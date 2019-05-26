<?php require('header.php'); ?>
<div class="container">
    <?php
    require('koneksi.php');
    // PAGINATION SETTING
    $limit = 15;
    $page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
    $start = ($page > 1) ? ($page * $limit) - $limit : 0;

    $allData = $conn->query("select * from prestasi;");
    $rowCount = mysqli_num_rows($allData);
    $pages =    ceil($rowCount / $limit);

    $sql = "select id,Nama,mahasiswa.NIM,Predikat,Tingkat,Tahun,Kegiatan from prestasi inner join mahasiswa on prestasi.NIM = mahasiswa.NIM LIMIT " . $start . "," . $limit . ";";
    $result = $conn->query($sql);


    ?>

    <table class="table">
        <thead class="thead-light">
            <th class="text-center">Nama Mahasiswa</th>
            <th class="text-center">Predikat</th>
            <th class="text-center">Tingkat</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Kegiatan</th>
            <th class="text-center">Aksi</th>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td class='text-center'><a href='detail.php?q=" . $row['NIM'] . "'>" . $row['Nama'] . "</a></td>
                    <td class='text-center'>" . $row['Predikat'] . "</td>
                    <td class='text-center'>" . $row['Tingkat'] . "</td>
                    <td class='text-center'>" . $row['Tahun'] . "</td>
                    <td class='text-center'>" . $row['Kegiatan'] . "</td>
                    <td class='text-center'> <button class='btn btn-danger' onclick='hapus(" . $row['id'] . ",`" . $row['Predikat'] . "`,`" . $row['Kegiatan'] . "`,`" . $row['Nama'] . "`)'>Hapus</button> 
                    <a href='edit.php?id=".$row['id'].
                    "'<button class=' btn btn-primary'>Edit</button></td>
                    </tr>
                ";
            }
            $conn->close();
            ?>

        </tbody>
    </table>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <?php
                for ($i = 1; $i <= $pages; $i++) {
                    ?>
                    <a href="?p=<?php echo $i; ?>"><button class="btn btn-primary"><?php echo $i; ?></button></a>
                <?php
            }
            ?>
            </div>
        </div>
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