<?php
// memanggil library FPDF
require('fpdf/fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');

// membuat halaman baru
$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string yang akan ditampilkan
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR MAHASISWA MATKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
//membuat header tabel
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(25,6,'J KEL',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'TANGGAL LHR',1,1);
$pdf->SetFont('Arial','',10);

include 'koneksi.php';
//membuat variabel mahasiswa yang berisi query untuk mengambil semua data yang ada di tabel mahasiswa
$mahasiswa = mysqli_query($con, "select * from mahasiswa");

//membuat perulangan untuk memberikan isian sesuai dengan header tabel yang sudah dibuat pada line ke-22 sampai 26
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['nim'],1,0);
    $pdf->Cell(50,6,$row['nama'],1,0);
    $pdf->Cell(25,6,$row['jkel'],1,0);
    $pdf->Cell(50,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['tgllhr'],1,1);
}
    //Menampilkan semua informasi yang ada di variabel $pdf
    $pdf->Output();
?>