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
        $namaAdmin = $_POST['namaAdmin'];
        $no_telepon = $_POST['no_telepon'];
        $email = $_POST['email'];
        $username = $_POST['username'];

        $login = mysqli_query($koneksi, "select * from admin where username='$username'");
        $hasil = mysqli_fetch_array($login);
        $ketemu = mysqli_num_rows($login);      

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
                        $query = "SELECT * FROM admin where id_admin='$idAdmin'";
                        $hasil = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_array($hasil);

                        $target = "../../../file/profil/$data[gambar]";

                        if(!empty($data['gambar']) and file_exists($target))
                        {
                            unlink($target);
                            move_uploaded_file($file_tmp, '../../../file/profil/'.$gambar);

                            if($ketemu == 1)
                            {
                                    $queryEditAdmin = mysqli_query($koneksi, "update admin SET nama_admin='$namaAdmin', no_telepon='$no_telepon', email='$email',username='$username', gambar='$gambar' where id_admin='$idAdmin'");
                                    if ($queryEditAdmin)
                                    {
                                        echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";
                                    }
                                    else 
                                    {
                                        echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";        
                                    }
                            }
                            elseif ($ketemu == 0)
                            {
                                if ($ketemu == 0)
                                {
                                     $queryEditAdmin = mysqli_query($koneksi, "update admin SET nama_admin='$namaAdmin', no_telepon='$no_telepon', email='$email',username='$username', gambar='$gambar' where id_admin='$idAdmin'");                                     if ($queryEditAdmin)
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
                               $queryEditAdmin = mysqli_query($koneksi, "update admin SET nama_admin='$namaAdmin', no_telepon='$no_telepon', email='$email',username='$username', gambar='$gambar' where id_admin='$idAdmin'");                                    if ($queryEditAdmin)
                                    {
                                        echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";
                                    }
                                    else 
                                    {
                                        echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";        
                                    }
                            }
                            elseif ($ketemu == 0)
                            {
                                if ($ketemu == 0)
                                {
                                     $queryEditAdmin = mysqli_query($koneksi, "update admin SET nama_admin='$namaAdmin', no_telepon='$no_telepon', email='$email',username='$username', gambar='$gambar' where id_admin='$idAdmin'");                                        if ($queryEditAdmin)
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
               $queryEditAdmin = mysqli_query($koneksi, "update admin SET nama_admin='$namaAdmin', no_telepon='$no_telepon', email='$email',username='$username' where id_admin='$idAdmin'");                    if ($queryEditAdmin)
                    {
                        echo "<script> alert('Data Berhasil Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";
                    }
                    else 
                    {
                        echo "<script> alert('Data Gagal Disimpan'); window.location = '$admin_url' + 'adminweb.php?module=admin';</script>";        
                    }
            }
            elseif ($ketemu == 0)
            {
                if ($ketemu == 0)
                {
                      $queryEditAdmin = mysqli_query($koneksi, "update admin SET nama_admin='$namaAdmin', no_telepon='$no_telepon', email='$email',username='$username', gambar='$gambar' where id_admin='$idAdmin'");                        if ($queryEditAdmin)
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
                    echo "<script> alert('Username sudah digunakan. Coba ganti username lain.'); window.location = self.history.back();</script>";
                }
            }
        }
    }

?>