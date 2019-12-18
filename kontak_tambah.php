<?php
    include "lib/config.php";
    include "lib/koneksi.php";

        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $pesan_kritiksaran = $_POST['pesan_kritiksaran'];
      

    $kritik = mysqli_query($koneksi, "select * from kritiksaran where id_kritiksaran ='$id'");
    $ketemu = mysqli_num_rows($kritiksaran);      

    if ($ketemu == 0)
    {
        $queryKritik = mysqli_query($koneksi, "INSERT INTO kritiksaran (nama_lengkap, email, no_telp, pesan_kritiksaran) VALUES ('$nama_lengkap','$email','$no_telp','$pesan_kritiksaran')");
        
        if ($queryKritik)
        {
            header('location:../../index.php?module=berhasil_kritiksaran');           
        }
        else
        {
            header('location:../../index.php?module=kritiksaran');          
        }
    }
    else
    {
        header('location:../../index.php?module=usernameada');              
    }
?>