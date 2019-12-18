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
	    $namaMember = $_POST['namaMember'];
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    $repassword = $_POST['repassword'];
	    $email = $_POST['email'];
	    $alamat = $_POST['alamat'];
	    $no_telepon = $_POST ['no_telepon'];
		$querySimpan = mysqli_query($koneksi, "INSERT INTO member (nama_member, username, password, email, alamat, no_telepon) VALUES ('$namaMember','$username','$password','$email','$alamat','$no_telepon')");

   		 if ($querySimpan) {
        echo "<script> alert('Data Member Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=member';</script>";

    	} else {
        echo "<script> alert('Data Member Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_member';</script>";
    	}
	}
?>