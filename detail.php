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
    <table class="table">
        <thead class="thead-light">
            <th class="text-center">Predikat</th>
            <th class="text-center">Tingkat</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Kegiatan</th>
        </thead>
        <tbody>
            <?php
            while ($row = $result_prestasi->fetch_assoc()) {
                echo "<tr>
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
<?php require('footer.php') ?>