<?php
    include "koneksi.php";

    // $suhu = $_GET['suhu'];
    // $kelembaban = $_GET['kelembaban'];
    $nitrogen = $_GET['nitrogen'];
    $phosfor = $_GET["phosfor"];
    $kalium = $_GET["kalium"];
    $ph = $_GET['ph'];

    mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT =1");

    $simpan = mysqli_query($koneksi, "INSERT INTO tb_sensor(nitrogen, phosfor, kalium, ph)VALUES('$nitrogen', '$phosfor', '$kalium', '$ph')");
    
    if($simpan){
        echo "Berhasil Masuk Database";
    }
    else{
        echo "Gagal masuk database";
    }

?>