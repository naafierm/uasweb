<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEB PRESTASI JPTEI</title>
</head>

<body>
    <?php
    require('koneksi.php');
    $sql = "select id,Nama,mahasiswa.NIM,Predikat,Tingkat,Tahun,Kegiatan from prestasi inner join mahasiswa on prestasi.NIM = mahasiswa.NIM;";
    $result = $conn->query($sql); ?>
    <table border='1'>
        <tbody>
            <th>Nama Mahasiswa</th>
            <th>Predikat</th>
            <th>Tingkat</th>
            <th>Tahun</th>
            <th>Kegiatan</th>
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
</body>

</html>