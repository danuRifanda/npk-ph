<?php
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * from tb_sensor order by id_sensor desc");

    $data = mysqli_fetch_array($sql);

    $phosfor = $data['phosfor'];

    if($phosfor == NULL){
        echo $phosfor = 0;
    }else{
        echo $phosfor;
    }
?>