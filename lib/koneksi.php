<?php
// definisikan koneksi database
$server = "localhost";
$username = "root";
$password = "";
$database =  "puskesmas_db";


//koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password) or die ("Koneksi gagal");
mysqli_select_db($koneksi, $database) or die ("Database tidak bisa dibuka");

?>