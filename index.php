<?php require('header.php');?>
<div class="container">
    <?php
    require('koneksi.php');
    $sql = "select id,Nama,mahasiswa.NIM,Predikat,Tingkat,Tahun,Kegiatan from prestasi inner join mahasiswa on prestasi.NIM = mahasiswa.NIM;";
    $result = $conn->query($sql); ?>
    <table  class="table">
        <thead class="thead-light">
        <th class="text-center">Nama Mahasiswa</th>
        <th class="text-center">Predikat</th>
        <th class="text-center">Tingkat</th>
        <th class="text-center">Tahun</th>
        <th class="text-center">Kegiatan</th>
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
                    </tr>
                ";
            }
            $conn->close();
            ?>

        </tbody>
    </table>    
</div>
<?require('footer.php')?>