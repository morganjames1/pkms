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


		$kata1 = $_POST['kata1'];
		$kata2 = $_POST['kata2'];

		$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
		$gambar = $_FILES['file']['name'];
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
		{
			if($ukuran < 10440700)
			{			
				if(!empty($kata1) and !empty($kata2))
				{
					if(!empty($gambar))
					{
						move_uploaded_file($file_tmp, '../../../file/slide/'.$gambar);

						$querySimpan = mysqli_query($koneksi, "insert into slide (comment1, comment2, gambar) VALUES 
							('$kata1','$kata2','$gambar')");
						
						if ($querySimpan)
						{
							echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=slide';</script>";
						}
						else 
						{
							echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=slide';</script>";		
						}
					}
					else
					{
						$querySimpan = mysqli_query($koneksi, "insert into slide (comment1, comment2, gambar) VALUES 
							('$kata1','$kata2','$gambar')");
						
						if ($querySimpan)
						{
							echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=slide';</script>";
						}
						else 
						{
							echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=slide';</script>";		
						}
					}
				}
				else
				{
					echo "<script> alert('Data slide belum valid'); window.location = '$admin_url' + 'adminweb.php?module=tambah_slide';</script>";		
				}
			}					
			else
			{
				echo "<script> alert('UKURAN FILE TERLALU BESAR'); window.location = '$admin_url' + 'adminweb.php?module=tambah_slide';</script>";
			}
		}
		else
		{
			echo "<script> alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); window.location = '$admin_url' + 'adminweb.php?module=tambah_slide';</script>";
		}
	}
?>