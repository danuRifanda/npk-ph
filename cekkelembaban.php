<?php
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * from tb_sensor order by id_sensor desc");

    $data = mysqli_fetch_array($sql);

    $kelembaban = $data['kelembaban'];

    if($kelembaban == NULL){
        echo $kelembaban = 0;
    }else{
        echo $kelembaban;
    }
?>