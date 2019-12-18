<?php
session_start();
if (empty($_SESSION['usernameadmin']) AND empty($_SESSION['passuseradmin'])) {
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idkota = $_POST['id_kota'];
    $namakota = $_POST['namakota'];
    $tarifkota= $_POST['tarifkota'];
    $queryEdit = mysqli_query($koneksi,"UPDATE kota SET kota='$namakota', tarif='$tarifkota', id_kabupaten = '$kabupaten' WHERE id_kota='$idkota'");

    if ($queryEdit) {
        echo "<script> alert('Data kota Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=ongkir';</script>";
    } else {
        echo "<script> alert('Data kota Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=edit_kota&id_kota='+'$idkota';</script>";

    }
}
?>