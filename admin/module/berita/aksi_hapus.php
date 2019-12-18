<?php
	session_start();
	
	if (empty($_SESSION['usernameadmin']) AND empty($_SESSION['passuseradmin']))
	{
		echo "<center>Untuk mengakses modul, Anda harus login <br/>";
		echo "<a href='../../index.php'><b>LOGIN</b></a></center>";
	}
	else 
	{
		include "../../../lib/config.php";
		include "../../../lib/koneksi.php";
		
		$idberita = $_GET['id_berita'];
		$queryHapus =mysqli_query($koneksi, "DELETE from berita where id_berita='$idberita'");
		
		if ($queryHapus)
		{
			echo "<script> alert('Data Berhasil dihapus'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";
		}
		else 
		{
			echo "<script> alert('Data Gagal Dihapus'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";		
		}
	}
?>