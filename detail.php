<?php require('header.php');?>

<body>


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
    <table border='1'>
        <tbody>
            <th>Predikat</th>
            <th>Tingkat</th>
            <th>Tahun</th>
            <th>Kegiatan</th>
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

<?php require('footer.php')?>