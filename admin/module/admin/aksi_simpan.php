<?php
	session_start();
	
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
		
	if (empty($_SESSION['usernameadmin']) AND empty($_SESSION['passuseradmin']))
	{
		echo "<center>Untuk mengakses modul, Anda harus admin <br/>";
		echo "<a href='../../index.php'><b>admin</b></a></center>";
	}
	else 
	{
        $namaAdmin = $_POST['namaAdmin'];
        $no_telepon = $_POST['no_telepon'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		$repassword = $_POST['repassword'];

		$admin = mysqli_query($koneksi, "select * from admin where username='$username'");
		$ketemu = mysqli_num_rows($admin);		

		$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
		$gambar = $_FILES['file']['name'];
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];	
		
		if(!empty($gambar))
		{
			if(in_array($ekstensi, $ekstensi_diperbolehkan) == true)
			{
				if($ukuran < 10440700)
				{			
					if($ketemu == 0)
					{
						if($password == $repassword)
						{
								move_uploaded_file($file_tmp, '../../../file/profil/'.$gambar);								

								$querySimpanAdmin = mysqli_query($koneksi, "insert into admin (nama_admin, username, password, email, no_telepon, gambar) VALUES ('$namaAdmin','$username','$password','$email','$no_telepon','$gambar')");
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
						echo "<script> alert('Password tidak cocok. Ulangi input password.'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";
						}
					}
					else 
					{
						echo "<script> alert('Username sudah digunakan. Coba ganti username lain.'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";
					}
				}		
				else
				{
					echo "<script> alert('UKURAN FILE TERLALU BESAR'); window.location = '$admin_url' + 'adminweb.php?module=tambah_admin';</script>";
				}
			}
			else
			{
				echo "<script> alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); window.location = '$admin_url' + 'adminweb.php?module=tambah_admin';</script>";
			}		
		}
		else 
		{
			$querySimpanAdmin = mysqli_query($koneksi, "insert into admin (id_admin, nama_admin, username, password, email, no_telepon, gambar) VALUES ('$idAdmin','$namaAdmin','$username','$password','$email','$no_telepon','$gambar')");
			if ($querySimpanAdmin)
			{
				echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";
			}
			else 
			{
				echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";		
			}							
		}
	}
?>