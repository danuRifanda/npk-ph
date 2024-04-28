<?php
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * from tb_sensor order by id_sensor desc");

    $data = mysqli_fetch_array($sql);

    $x1 = $data['nitrogen'];
    $x2 = $data['phosfor'];
    $x3 = $data['kalium'];
    $x4 = $data['ph'];

    if($x1 == "" && $x2 == "" && $x3 == "" && $x4 == ""){
        echo "TIDAK ADA DATA";
    }

    // echo ($suhu + $kelembaban)/2;
    echo (-0.94) + (0.06*$x1) + (-0.04*$x2) + (-0.00*$x3) + (2.00*$x4);
?>