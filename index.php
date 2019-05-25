<?php require('header.php'); ?>
<div class="container">
    <?php
    require('koneksi.php');
    $sql = "select id,Nama,mahasiswa.NIM,Predikat,Tingkat,Tahun,Kegiatan from prestasi inner join mahasiswa on prestasi.NIM = mahasiswa.NIM;";
    $result = $conn->query($sql); ?>
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
                    <td><a href='detail.php?q=" . $row['NIM'] . "'>" . $row['Nama'] . "</a></td>
                    <td>" . $row['Predikat'] . "</td>
                    <td>" . $row['Tingkat'] . "</td>
                    <td>" . $row['Tahun'] . "</td>
                    <td>" . $row['Kegiatan'] . "</td>
                    <td> <button class='btn btn-danger' onclick='hapus(" . $row[id] . ",`" . $row['Predikat'] . "`,`" . $row['Kegiatan'] . "`,`" . $row['Nama'] . "`)'>Hapus</button> 
                    <button class=' btn btn-primary'>Edit</button></td>
                    </tr>
                ";
            }
            $conn->close();
            ?>

        </tbody>
    </table>

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

    <script>
        function hapus(id, predikat, kegiatan, nama) {
            $('#displayKeterangan').text("Apakah anda yakin menghapus prestasi " + predikat + " " + kegiatan + " oleh " + nama);
            $btn = "<form id='deleteForm' action='delete.php' method='POST'><button type='submit' name='id' value='"+id+"' class='btn btn-danger'>Hapus</button></form>";
            if($('#deleteForm').length){
                $('#deleteForm').remove();
                $('#deleteOption').append($btn);
            }else{
                $('#deleteOption').append($btn);
            }
            $('#modalDelete').modal('show');
        }
    </script>
    <?php require('footer.php') ?>