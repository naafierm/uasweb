<?php
require('header.php')?>
<div class="container">
<?php
include 'koneksi.php';
 $sql = "select * from mahasiswa";
    $result = $conn->query($sql);
    ?>
    <h1 class="center">Data Mahasiswa</h1>
    <table class="table">
        <thead class="thead-light">
            <th class="text-center">Nama</th>
            <th class="text-center">NIM</th>
            <th class="text-center">Tanggal Lahir</th>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td class='text-center'><a href='detail.php?q=" . $row['NIM'] . "'>" . $row['Nama'] . "</a></td>
                    <td class='text-center'>" . $row['NIM'] . "</td>
                    <td class='text-center'>" . $row['TTL'] . "</td>
                    </tr>
                ";
            }
            $conn->close();
            ?>

        </tbody>
    </table>




</div>
<?php
require('footer.php')
?>