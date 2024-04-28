<?php
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * from tb_sensor order by id_sensor desc");

    $data = mysqli_fetch_array($sql);

    $nitrogen = $data['nitrogen'];

    if($nitrogen == NULL){
        echo $nitrogen = 0;
    }else{
        echo $nitrogen;
    }
?>