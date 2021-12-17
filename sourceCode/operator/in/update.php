<?php
require_once '../../includes/koneksi.php';
 
if(isset($_POST['ubah'])){
$id = $_POST['id_masuk'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$supplier= $_POST['supplier'];

 
// menginput data ke database
$query= "UPDATE barang_masuk set quantity ='$quantity', tanggal='$date', supplier ='$supplier' WHERE id_masuk = '$id'";
	
$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
 // Jika Sukses, Lakukan :
 echo "
	  <script type='text/javascript'>
      window.location='in.php';
      </script>
        ";
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  }
 
}
?>