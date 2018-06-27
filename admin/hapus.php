<?php
include "../koneksi.php";
$id 	= $_GET['id'];

$query = mysql_query("DELETE FROM data_pasien WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'data_pasien.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'data_pasien'</script>";	
}
?>