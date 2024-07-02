<?php
    include "koneksi.php";

    // $suhu = $_GET['suhu'];
    // $kelembaban = $_GET['kelembaban'];
    $nitrogen = $_GET['nitrogen'];
    $phosfor = $_GET["phosfor"];
    $kalium = $_GET["kalium"];
    $ph = $_GET['ph'];

    //setting tanggal dan jam
    date_default_timezone_set("Asia/Jakarta");
    $tanggal = date('Y-m-d');
    $jam = date('H:i:sa');

    mysqli_query($koneksi, "ALTER TABLE tb_data AUTO_INCREMENT =1");

    $simpan = mysqli_query($koneksi, "INSERT INTO tb_data(tanggal, waktu, nitrogen, phosfor, kalium, ph)VALUES('$tanggal', '$jam', '$nitrogen', '$phosfor', '$kalium', '$ph')");
    
    if($simpan){
        echo "Berhasil Tersimpan";
    }
    else{
        echo "Gagal Tersimpan";
    }

?>