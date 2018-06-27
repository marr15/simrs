<?php
include "../koneksi.php";

$id    		  = $_POST['id'];
$nama_pasien  = $_POST['nama_pasien'];
$jk           = $_POST['jk'];
$tgl_lahir	  = $_POST['tgl_lahir'];
$alamat      = $_POST['alamat'];


$query = mysql_query("UPDATE data_pasien SET nama_pasien='$nama_pasien', jk='$jk', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE id='$id'");
if ($query){
header('location:data_pasien.php');}	
    //echo "<script>alert('Data Karyawan Berhasil diubah!'); window.location = 'index.php'</script>";	
//} else {
	//echo "<script>alert('Data Karyawan Gagal diubah!'); window.location = 'edit.php?hal=edit&kd=$kary_id</script>";
    //}
?>