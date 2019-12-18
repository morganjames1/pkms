<?php
		include "../../../lib/config.php";
		include "../../../lib/koneksi.php";
		
		$id_konfirmasi = $_GET['id_konfirmasi'];
		$queryHapus = mysqli_query($koneksi, "UPDATE konfirmasi SET status = 'Pengiriman' WHERE id_konfirmasi='$id_konfirmasi'");
		
		if ($queryHapus)
		{
			echo "<script> alert('Status Berhasil Diganti'); window.location = '$admin_url' + 'adminweb.php?module=konfirmasi';</script>";
		}
		else 
		{
			echo "<script> alert('Status Gagal Diganti'); window.location = '$admin_url' + 'adminweb.php?module=konfirmasi';</script>";		
		}
?>