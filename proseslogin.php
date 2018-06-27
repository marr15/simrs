
<?php
	session_start(); //memulai untuk melakukan session
	include 'koneksi.php';// menghubungka dengan server lokal

	$username = $_POST['username'];// inputan ari halaman yang lain.
	$password = $_POST['password'];

	$query = mysql_query("SELECT * FROM user WHERE username='$username' and password='$password' ");//autentikasi.
	$cek = mysql_num_rows($query);//mengetahui jumlah data dr hasil autentifikasi
	if ($cek <> 0){
		while ($data = mysql_fetch_assoc($query)){ 
			$_SESSION['username']= $username;
			if($data['hak_akses']=='super_admin'){
				header("location:admin/index.php");
			}elseif ($data['hak_akses']=='backof') {
				header("location:admin/index.php");
			} elseif ($data['hak_akses']=='frontof') {
				header("location:admin/index.php");
			}
		}
	}
	else{
		header("location:index.html");
	}


  ?>