<?php //kode wajib untuk membuka program php
$nama = $_POST['nama']; //mendefinisikan variabel nama yang akan menampung isi dari nama yang ada di index.html
$alamat = $_POST['alamat']; //mendefinisikan variabel alamat yang akan menampung isi dari alamat yang ada di index.html
$email = $_POST['email']; //mendefinisikan variabel email yang akan menampung isi dari email yang ada di index.html
$status = $_POST['status']; //mendefinisikan variabel status yang akan menampung isi dari status yang ada di index.html
$komentar = $_POST['komentar']; //mendefinisikan variabel komentar yang akan menampung isi dari komentar yang ada di index.html

echo "<head><title>My Guest Book</head></title>"; //tag untuk membuat tentang informasi sebuah dokumen dengan judul My Guest Book
$fp = fopen("guestbook.txt","a+"); //mendefinisikan variabel $fp dengan fungsi fopen() untuk mengaktifkan file guestbook.txt sebelum file tersebut dapat diakses
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n"); //fputs digunakan untuk menyimpan string str ke dalam file
fclose($fp); //fungsi untuk menutup file yang ada pada variabel $fp
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>"; 
echo "<a href=index.html> Isi Buku Tamu </a><br>"; //membuat hyperlink yang akan dituju yaitu index.html untuk mengisi Buku Tamu
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>"; //membuat hyperlink yang akan dituju yaitu lihat.php untuk melihat daftar Buku Tamu
?> <!-- tag penutup program php -->