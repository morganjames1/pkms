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
		$judul_berita = $_POST['judul_berita'];
		$id_admin    = $_POST ['id_admin'];
		$isi_berita  = $_POST ['isi_berita'];
		date_default_timezone_set('Asia/Jakarta');
		$tanggal  = date('Y-m-d H:i:s');

 		$ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];    

        if(!empty($gambar))
        {
            if(in_array($ekstensi, $ekstensi_diperbolehkan) == true)
            {
                if($ukuran < 10440700)
                {           
                      
                          $upload=move_uploaded_file($file_tmp, '../../images/'.$gambar);
                          if($upload){


                            $querySimpan = mysqli_query($koneksi, "INSERT INTO berita (judul_berita, id_admin, isi_berita, gambar,tanggal) VALUES ('$judul_berita', '$id_admin', '$isi_berita', '$gambar','$tanggal')");

					   		 if ($querySimpan) {
					        echo "<script> alert('Data berita Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=berita';</script>";

					    	} else {
					        // echo "<script> alert('Data berita Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_berita';</script>";
					        echo "$tanggal";
					    	}
                       }else{
                       	echo "<script> alert('Gambar Gagal di Upload'); window.location = self.history.back();</script>";
                       } 
	                }else{
	                	echo "<script> alert('Ukuran File Terlalu Besar'); window.location = self.history.back();</script>";
	                }
	        }else{
	        	echo "<script> alert('Ekstensi Gambar Salah'); window.location = self.history.back();</script>";
	        }
	    }else{
	    	echo "<script> alert('Gambar Tidak Ada'); window.location = self.history.back();</script>";
	    }


		
	}
?>