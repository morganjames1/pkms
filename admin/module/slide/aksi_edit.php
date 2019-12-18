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
		$id = $_POST['id_slide'];	
		$kata1 = $_POST['kata1'];
		$kata2 = $_POST['kata2'];


		$ekstensi_diperbolehkan	= array('png','jpg');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];	
 
		if ($nama == "")
		{
			$queryEdit = mysqli_query($koneksi, "update slide SET comment1='$kata1', comment2='$kata2' where id_slide = '$id'");		
			if ($queryEdit)
			{
				echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=slide';</script>";
			}
			else 
			{
				echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=slide';</script>";	
			}	
		}						
		elseif(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
		{
			if($ukuran < 10440700)
			{			
				if(!empty($kata1) and !empty($kata2))
				{
                    $query = "SELECT * FROM slide where id_slide='$id'";
                    $hasil = mysqli_query($koneksi, $query);
                    $data = mysqli_fetch_array($hasil);

                    $target = "../../../file/slide/$data[gambar]";

                    if(!empty($data['gambar']) and file_exists($target))
                    {
						unlink($target);

						move_uploaded_file($file_tmp, '../../../file/slide/'.$nama);
						
						$queryEdit = mysqli_query($koneksi, "update slide SET comment1='$kata1', comment2='$kata2', gambar='$nama' where id_slide = '$id'");
							
						if ($queryEdit)
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
						move_uploaded_file($file_tmp, '../../../file/slide/'.$nama);
						
						$queryEdit = mysqli_query($koneksi,"update slide SET comment1='$kata1', comment2='$kata2', gambar='$nama' where id_slide = '$id'");
							
						if ($queryEdit)
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
					echo "<script> alert('Data slide Belum Valid'); window.location = '$admin_url' + 'adminweb.php?module=edit_slide&id_slide=' + '$id'; </script>";
				}
			}
			else
			{
				echo "<script> alert('UKURAN FILE TERLALU BESAR'); window.location = '$admin_url' + 'adminweb.php?module=edit_slide&id_slide=' + '$id'; </script>";
			}
		}
		else
		{
			echo "<script> alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); window.location = '$admin_url' + 'adminweb.php?module=edit_slide&id_slide=' + '$id';</script>";
		}	
	}
?>