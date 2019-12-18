<?php
	session_start();
	
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
		
	if (empty($_SESSION['usernameadmin']) AND empty($_SESSION['passuseradmin']))
	{
		echo "<center>Untuk mengakses modul, Anda harus login <br/>";
		echo "<a href='../../index.php'><b>LOGIN</b></a></center>";
	}
	else 
	{
		$namaongkir = $_POST['namaongkir'];
		$tarifongkir = $_POST['tarifongkir'];
		$kabupaten = $_POST['kabupaten'];
		
		$querySimpan = mysqli_query($koneksi,"INSERT INTO ongkir (kota, tarif, id_kabupaten) VALUES ('$namaongkir','$tarifongkir','$kabupaten')");

   		 if ($querySimpan) {
        echo "<script> alert('Data Ongkir Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=ongkir';</script>";

    	} else {
        echo "<script> alert('Data Ongkir Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_Ongkir';</script>";
    	}
	}
?>