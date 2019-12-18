<?php
session_start();
if (empty($_SESSION['usernameadmin']) AND empty($_SESSION['passuseradmin'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $id = $_POST['id_kategori'];
    $namaKategori = $_POST['namaKategori'];
    $queryEdit = mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$namaKategori' WHERE id_kategori='$id'");

    if ($queryEdit) {
        echo "<script> alert('Data Kategori Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
    } else {
        echo "<script> alert('Data Kategori Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori='+'$idKategori';</script>";

    }
}
?>

