<?php
 include ("../lib/koneksi.php");
 include ("../lib/config.php");


// Koneksi library FPDF
require('../../fpdf/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A5');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'Data Laporan Pre-Order',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Jl. Abc No. 100 Sleman, Yogyakarta.',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(50,6,'NAMA PEMESAN',1,0);
$pdf->Cell(35,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'NO.TELEPON',1,0);
$pdf->Cell(25,6,'KATEGORI',1,0);
$pdf->Cell(25,6,'JUMLAH',1,1);
$pdf->Cell(25,6,'DESKRIPSI',1,1);
$pdf->Cell(25,6,'NAMA GAMBAR',1,1);
 
$pdf->SetFont('Arial','',10);
$queryPreorder = mysqli_query($koneksi,"SELECT m.nama_member, m.alamat, m.no_telepon, k.nama_kategori, p.jumlah, p.deskripsi,
                            p.tgl_order, p.gambar
                            FROM member m, kategori k, preorder p
                            WHERE p.id_member=m.id_member and p.id_kategori = k.id_kategori and m.id_member = '$id_member'
                            ");
                            while($pre=mysqli_fetch_array($queryPreorder)){
    $pdf->Cell(10,6,$pre['id_member'],1,0);
    $pdf->Cell(50,6,$pre['Nama'],1,0);
    $pdf->Cell(35,6,$pre['alamat'],1,0);
    $pdf->Cell(30,6,$pre['no_telepon'],1,0);
    $pdf->Cell(25,6,$pre['kategori'],1,0);
    $pdf->Cell(25,6,$pre['jumlah'],1,1);
    $pdf->Cell(25,6,$pre['deskripsi'],1,1);
    $pdf->Cell(25,6,$pre['gambar'],1,1);
}

$pdf->Output();
?>
