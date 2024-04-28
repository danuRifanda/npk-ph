<?php
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * from tb_sensor order by id_sensor desc");

    $data = mysqli_fetch_array($sql);

    $suhu = $data['suhu'];

    if($suhu == NULL){
        echo $suhu = 0;
    }else{
        echo $suhu;
    }

    
?>