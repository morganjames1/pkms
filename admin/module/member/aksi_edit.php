<?php
session_start();
if (empty($_SESSION['usernameadmin']) AND empty($_SESSION['passuseradmin'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idMember = $_POST['id_member'];
    $namaMember = $_POST['namaMember'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST ['no_telepon'];
    $queryEdit = mysqli_query($koneksi, "UPDATE member SET nama_member='$namaMember', username='$username', email='$email', alamat='$alamat', no_telepon ='$no_telepon'
    WHERE id_member='$idMember'");

    if ($queryEdit) {
        echo "<script> alert('Data Member Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=member';</script>";
    } else {
        echo "<script> alert('Data Member Gagal Masuk'); window.location = '$admin_url'+'adminweb.php?module=edit_member&id_member='+'$idMember';</script>";

    }
}
?>