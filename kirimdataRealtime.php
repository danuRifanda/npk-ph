<?php
    include "koneksi.php";

    $id_sensor = 108;
    $nitrogen = $_GET['nitrogen'];
    $phosfor = $_GET["phosfor"];
    $kalium = $_GET["kalium"];
    $ph = $_GET['ph'];

    //setting tanggal dan jam
    date_default_timezone_set("Asia/Jakarta");
    $tanggal = date('Y-m-d');
    $jam = date('H:i:sa');

    mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT =1");

    $simpan = mysqli_query($koneksi, "UPDATE `tb_sensor` SET `tanggal`='$tanggal',`waktu`='$jam',`nitrogen`='$nitrogen',`phosfor`='$phosfor',`kalium`='$kalium',`ph`='$ph' WHERE id_sensor = '$id_sensor'");
    if($simpan){
        echo "$nitrogen, $phosfor, $kalium, $ph";
    }
    else{
        echo "Gagal tampil di web";
    }

?>