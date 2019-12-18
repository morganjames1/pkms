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


		$nama_produk = $_POST['nama'];
		$harga = $_POST['harga'];
		$kategori = $_POST['kategori'];
		$stok = $_POST['stok'];
		$berat = $_POST['berat'];
		$size = $_POST['size'];
		$bahan = $_POST['bahan'];
		$deskripsi = $_POST['deskripsi']; 

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
				if(!empty($nama_produk) and !empty($harga) and !empty($kategori))
				{
					if(!empty($gambar))
					{
						move_uploaded_file($file_tmp, '../../../file/produk/'.$gambar);
						// kalo ada gambar
						$querySimpan = mysqli_query($koneksi, "insert into produk (nama_produk, harga, id_kategori, gambar, stok, berat, id_size, bahan, deskripsi) VALUES 
							('$nama_produk','$harga','$kategori','$gambar','$stok', '$berat', '$size', '$bahan','$deskripsi')");
						 // $querySize = mysqli_query($koneksi, "insert into size (id_produk, stok)")
						
						if ($querySimpan)
						{
							echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=produk';</script>";
						}
						else 
						{
							echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=produk';</script>";		
						}
					}
					else
					{
						// kalo tidak ada gambar
						$querySimpan = mysqli_query($koneksi, "insert into produk (nama_produk, harga, id_kategori, gambar, stok, berat, id_size, bahan, deskripsi) VALUES 
							('$nama_produk','$harga','$kategori','$gambar','$stok', '$berat', '$size', '$bahan','$deskripsi')");
						
						if ($querySimpan)
						{
							echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=produk';</script>";
						}
						else 
						{
							echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=produk';</script>";		
						}
					}
				}
				else
				{
					echo "<script> alert('Data produk belum valid'); window.location = '$admin_url' + 'adminweb.php?module=tambah_produk';</script>";		
				}
			}					
			else
			{
				echo "<script> alert('UKURAN FILE TERLALU BESAR'); window.location = '$admin_url' + 'adminweb.php?module=tambah_produk';</script>";
			}
		}
		else
		{
			echo "<script> alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); window.location = '$admin_url' + 'adminweb.php?module=tambah_produk';</script>";
		}
	}
?>