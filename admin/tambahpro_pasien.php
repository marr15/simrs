<?php
include "../koneksi.php";
$nama_pasien  = $_POST['nama_pasien'];
$jk           = $_POST['jk'];
$tgl_lahir	  = $_POST['tgl_lahir'];
$alamat      = $_POST['alamat'];

$query = mysql_query("INSERT INTO data_pasien (nama_pasien, jk, tgl_lahir, alamat) VALUES ('$nama_pasien', '$jk', '$tgl_lahir', '$alamat')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'data_pasien.php'</script>";	
} else {
	echo "<script>alert('Data  Gagal dimasukan!'); window.location = 'data_pasien.php'</script>";	
}
?>