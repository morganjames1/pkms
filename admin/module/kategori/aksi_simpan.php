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
		$namaKategori = $_POST['namaKategori'];
		
		$querySimpan = mysqli_query($koneksi,"INSERT INTO kategori (nama_kategori) VALUES ('$namaKategori')");

   		 if ($querySimpan) {
        echo "<script> alert('Data kategori Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";

    	} else {
        echo "<script> alert('Data kategori Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
    	}
	}
?>