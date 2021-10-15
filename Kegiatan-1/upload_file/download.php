<?php //kode wajib untuk membuka program php

$myDir = "c:/xampp/htdocs/Prak PWD/Pertemuan 1/Kegiatan/upload_file"; //mendefinisikan nama direktori

$dir = opendir($myDir); //fungsi membuka direktori

echo "Isi folder (klik link untuk download) : <br>";

//isi dari folder/direktori yang telah dibuat tadi nantinya akan ditampilkan isi dari direktori tersebut
while ($tmp = readdir($dir)) {
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir); //fungsi penutup direktori
?> <!-- tag penutup program php -->