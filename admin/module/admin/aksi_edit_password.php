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
		$idAdmin = $_POST['id_admin'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		$Admin = mysqli_query($koneksi, "select * from admin where id_admin='$idAdmin'");
		$data = mysqli_fetch_array($Admin);
		$ketemu = mysqli_num_rows($Admin);		

			if($password == $data['password'])
			{
				$querySimpanAdmin = mysqli_query($koneksi, "update admin set password = '$repassword' where id_admin='$idAdmin'"); 

				if ($querySimpanAdmin)
				{
					echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";
				}
				else 
				{
					echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";		
				}

			}
			else
			{
			echo "<script> alert('Password tidak cocok. Ulangi input password.'); window.location = history.back();</script>";
			}
		
	}
?>