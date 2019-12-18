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
		$idMember = $_POST['id_member'];

		//$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		$member = mysqli_query($koneksi, "select * from member where id_member='$idMember'");
		$data = mysqli_fetch_array($member);
		$ketemu = mysqli_num_rows($member);		

			if($password == $data['password'])
			{
				$querySimpanMember = mysqli_query($koneksi, "update member set password = '$repassword' where id_member='$idMember'"); 

				if ($querySimpanMember)
				{
					echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=member';</script>";
				}
				else 
				{
					echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=member';</script>";		
				}

			}
			else
			{
			echo "<script> alert('Password tidak cocok. Ulangi input password.'); window.location = self.history.back();</script>";
			}
		
	}
?>