<?php
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * from tb_sensor order by id_sensor desc");

    $data = mysqli_fetch_array($sql);

    $kalium = $data['kalium'];

    if($kalium == NULL){
        echo $kalium = 0;
    }else{
        echo $kalium;
    }
?>