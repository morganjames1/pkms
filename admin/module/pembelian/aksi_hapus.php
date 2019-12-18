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
		
		$idPembelian = $_GET['id_pembelian'];
		$queryHapus= mysqli_query($koneksi,"DELETE FROM pembelian WHERE id_pembelian='$idPembelian'");
		
		if ($queryHapus)
		{
			echo "<script> alert('Data Berhasil dihapus'); window.location = '$admin_url'+'adminweb.php?module=pembelian';</script>";
		}
		else 
		{
			echo "<script> alert('Data Gagal Dihapus'); window.location = '$admin_url'+'adminweb.php?module=pembelian';</script>";		
		}
	}
?>