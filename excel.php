<?php
    include "koneksi.php";
    $query = "SELECT * FROM tb_sensor ORDER BY tanggal DESC";
    $result = mysqli_query($koneksi, $query);
    $no = 0;
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Nilai Sensor.xls"); 
?>

<p align="center" style="font-weight:bold;font-size:16pt">DATA SENSOR NPK & pH</p>
<table border="1" align="center" class="table">
    <thead>
        <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Nitrogen</th>
                <th>Phosfor</th>
                <th>Kalium</th>
                <th>pH</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) {
            $no +=1;
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['waktu']; ?></td>
                <td><?php echo $row['nitrogen']; ?></td>
                <td><?php echo $row['phosfor']; ?></td>
                <td><?php echo $row['kalium']; ?></td>
                <td><?php echo $row['ph']; ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
