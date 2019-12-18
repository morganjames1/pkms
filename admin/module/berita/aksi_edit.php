<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idberita=$_POST['id_berita'];
    $judul = $_POST['judul_berita'];
    $penulis = $_POST['penulis'];
    $isiberita = $_POST['isi_berita'];
  
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $gambar = $_FILES['file']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];    

        if(!empty($gambar))
        {
            if(in_array($ekstensi, $ekstensi_diperbolehkan) == true)
            {
                if($ukuran < 10440700)
                {           
                        $query = "SELECT * FROM berita where id_berita='$idberita'";
                        $hasil = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_array($hasil);

                        $target = "../../images/$data[gambar]";

                        if(!empty($data['gambar']) and file_exists($target))
                        {
                            unlink($target);
                            move_uploaded_file($file_tmp, '../../images/'.$gambar);

                            if($ketemu == 1)
                            {
                                    $queryEditAdmin = mysqli_query($koneksi, "update berita SET judul='$judul', id_admin='$penulis', isiberita='$isi_berita',username='$username', gambar='$gambar' where id_berita='$idberita'");
                                    if ($queryEditBerita)
                                    {
                                        echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";
                                    }
                                    else 
                                    {
                                        echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";        
                                    }
                            }
                            elseif ($ketemu == 0)
                            {
                                if ($ketemu == 0)
                                {
                                     $queryEditBerita = mysqli_query($koneksi, "update berita SET judul='$judul', id_admin='$penulis', isiberita='$isi_berita',username='$username', gambar='$gambar' where id_berita='$idberita'");                                  if ($queryEditBerita)
                                        {
                                            echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";
                                        }
                                        else 
                                        {
                                            echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";        
                                        }
                                }
                                else 
                                {
                                    echo "<script> alert('Username sudah digunakan. Coba ganti username lain.'); window.location = self.history.back();</script>";
                                }
                            }                               
                            else 
                            {
                                echo "<script> alert('Username sudah digunakan. Coba ganti username lain.'); window.location = self.history.back();</script>";
                            }
                        }
                        else
                        {
                            move_uploaded_file($file_tmp, '../../../file/profil/'.$gambar);

                            if($ketemu == 1)
                            {
                               $queryEditAdmin = mysqli_query($koneksi, "update berita SET judul='$judul', id_admin='$penulis', isiberita='$isi_berita',username='$username', gambar='$gambar' where id_berita='$idberita'");                                    if ($queryEditBerita)
                                    {
                                        echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";
                                    }
                                    else 
                                    {
                                        echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";        
                                    }
                            }
                            elseif ($ketemu == 0)
                            {
                                if ($ketemu == 0)
                                {
                                     $queryEditAdmin = mysqli_query($koneksi, "update berita SET judul='$judul', id_admin='$penulis', isiberita='$isi_berita',username='$username', gambar='$gambar' where id_berita='$idberita'");                                       if ($queryEditBerita)
                                        {
                                            echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";
                                        }
                                        else 
                                        {
                                            echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";        
                                        }
                                }
                                else 
                                {
                                    echo "<script> alert('Username sudah digunakan. Coba ganti username lain.'); window.location = self.history.back();</script>";
                                }
                            }                               
                            else 
                            {
                                echo "<script> alert('Username sudah digunakan. Coba ganti username lain.'); window.location = self.history.back();</script>";
                            }

                        }
                }       
                else
                {
                    echo "<script> alert('UKURAN FILE TERLALU BESAR'); window.location = self.history.back();</script>";
                }
            }
            else
            {
                echo "<script> alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN'); window.location = self.history.back();</script>";
            }       
        }
        else if ($gambar == "")
        {
            if($hasil['username'] == $username)
            {
               $queryEditAdmin = mysqli_query($koneksi, "update berita SET judul='$judul', id_admin='$penulis', isiberita='$isi_berita',username='$username', gambar='$gambar' where id_berita='$idberita'");                    if ($queryEditBerita)
                    {
                        echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";
                    }
                    else 
                    {
                        echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";        
                    }
            }
            elseif ($ketemu == 0)
            {
                if ($ketemu == 0)
                {
                      $queryEditAdmin = mysqli_query($koneksi, "update berita SET judul='$judul', id_admin='$penulis', isiberita='$isi_berita',username='$username', gambar='$gambar' where id_berita='$idberita'");                       if ($queryEditBerita)
                        {
                            echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";
                        }
                        else 
                        {
                            echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=berita';</script>";        
                        }
                }
                else 
                {
                    echo "<script> alert('Username sudah digunakan. Coba ganti username lain.'); window.location = self.history.back();</script>";
                }
            }
        }
    }

?>