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
		$id = $_POST['id_produk'];	
		$nama_produk = $_POST['nama_produk'];
		$harga = $_POST['harga'];
		$namaKategori = $_POST['kategori'];
		$stok = $_POST['stok'];
		$berat = $_POST['berat'];
		$size = $_POST['size'];
		$bahan = $_POST['bahan'];
		$deskripsi = $_POST['deskripsi'];

		$ekstensi_diperbolehkan	= array('png','jpg');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];	
 
		if ($nama == "")
		{
			$queryEdit = mysqli_query($koneksi, "update produk SET nama_produk = '$nama_produk', harga = '$harga', id_kategori= '$namaKategori', stok = '$stok', berat = '$berat',
			id_size = '$size', bahan = '$bahan', deskripsi = '$deskripsi' where id_produk = '$id'");		
			if ($queryEdit)
			{
				echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=produk';</script>";
			}
			else 
			{
				echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=produk';</script>";	
			}	
		}						
		elseif(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
		{
			if($ukuran < 10440700)
			{			
				if(!empty($nama_produk) and !empty($harga) and !empty($namaKategori))
				{
                    $query = "SELECT * FROM produk,size where id_produk='$id'";
                    $hasil = mysqli_query($koneksi, $query);
                    $data = mysqli_fetch_array($hasil);

                    $target = "../../../file/produk/$data[gambar]";

                    if(!empty($data['gambar']) and file_exists($target))
                    {
						unlink($target);

						move_uploaded_file($file_tmp, '../../../file/produk/'.$nama);
						
						$queryEdit = mysqli_query($koneksi, "update produk SET nama_produk = '$nama_produk', harga = '$harga', id_kategori= '$namaKategori', stok= '$stok', berat = '$berat',id_size = '$size', bahan = '$bahan', deskripsi = '$deskripsi', gambar='$nama' where id_produk = '$id'");
							
						if ($queryEdit)
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
						move_uploaded_file($file_tmp, '../../../file/produk/'.$nama);
						
						$queryEdit = mysqli_query($koneksi, "update produk SET nama_produk = '$nama_produk', harga = '$harga', id_kategori = '$namaKategori', stok = '$stok', berat = '$berat',
			            id_size = '$size', bahan = '$bahan',  deskripsi = '$deskripsi', gambar='$nama' where id_produk = '$id'");
							
						if ($queryEdit)
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
					echo "<script> alert('Data produk Belum Valid'); window.location = '$admin_url' + 'adminweb.php?module=edit_produk&id_produk=' + '$id'; </script>";
				}
			}
			else
			{
				echo "<script> alert('UKURAN FILE TERLALU BESAR'); window.location = '$admin_url' + 'adminweb.php?module=edit_produk&id_produk=' + '$id'; </script>";
			}
		}
		else
		{
			echo "<script> alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); window.location = '$admin_url' + 'adminweb.php?module=edit_produk&id_produk=' + '$id';</script>";
		}	
	}
?>