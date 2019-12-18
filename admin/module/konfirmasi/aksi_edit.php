<?php
session_start();
if (empty($_SESSION['usernameadmin']) AND empty($_SESSION['passuseradmin'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $id_konfirmasi = $_POST['id_konfirmasi'];
    $resi = $_POST['no_resi'];
    $email = $_POST['email'];
    $queryEdit = mysqli_query($koneksi, "UPDATE konfirmasi SET no_resi = '$resi', status = 'Pengiriman' WHERE id_konfirmasi='$id_konfirmasi'");

    if ($queryEdit) {
        echo "<script> alert('Data Telah Berhasil Di Perbaharui'); window.location = '$admin_url'+'adminweb.php?module=konfirmasi';</script>";
    } else {
        echo "<script> alert('Data Telah Berhasil Di Perbaharui'); window.location = '$admin_url'+'adminweb.php?module=edit_konfirmasi&id_konfirmasi='+'$id_konfirmasi';</script>";

    }
}


    // ini_set( 'display_errors', 1 );   
    // error_reporting( E_ALL );    
    // $from = "bjomalang.xyz";    
    // $to = "$email";    
    // $subject = "Pengiriman barang";    
    // $message = "Barang anda sudah dikirim !";   
    // $headers = "From:" . $from;    
    // mail($to,$subject,$message, $headers);

?>

