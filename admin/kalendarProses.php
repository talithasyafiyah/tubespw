<?php 
    include "../includes/koneksi.php";

    $kegiatan   = $_POST['kegiatan'];
    $mulai      = $_POST['mulai'];
    $selesai    = $_POST['selesai'];

    mysqli_query($koneksi, "INSERT INTO kalendar_admin SET kegiatan='$kegiatan', mulai='$mulai', selesai='$selesai' ");
    

    
    header("location: dashboardadm.php");
?>