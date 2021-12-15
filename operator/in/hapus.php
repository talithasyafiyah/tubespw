<?php
//koneksi kedatabase
require_once '../../includes/koneksi.php';
 
// menyimpan data id kedalam variabel id yang di samping tanda tanya pada in.php
$id_masuk   = $_GET['id'];
// query SQL untuk delete data
$query="DELETE from barang_masuk where id_masuk ='$id_masuk'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data yang anda Hapus Sukses');
</script>";


// mengalihkan ke halaman index.php
header("location:in.php");



?>