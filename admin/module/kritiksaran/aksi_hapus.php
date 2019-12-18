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
		
		$idkritik = $_GET['id_kritiksaran'];
		$queryHapus =mysqli_query($koneksi, "delete from kritiksaran where id_kritiksaran ='$idkritik'");
		
		if ($queryHapus)
		{
			echo "<script> alert('Data Berhasil dihapus'); window.location = '$admin_url' + 'adminweb.php?module=kritiksaran';</script>";
		}
		else 
		{
			echo "<script> alert('Data Gagal Dihapus'); window.location = '$admin_url' + 'adminweb.php?module=kritiksaran';</script>";		
		}
	}
?>