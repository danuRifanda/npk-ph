<?php
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * from tb_sensor order by id_sensor desc");

    $data = mysqli_fetch_array($sql);

    $ph = $data['ph'];

    if($ph == NULL){
        echo $ph = 0;
    }else{
        echo $ph;
    }
?>