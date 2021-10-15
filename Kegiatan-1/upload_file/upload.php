<?php //kode wajib untuk membuka program php
$lokasi_file= $_FILES['fupload']['tmp_name']; //mendefinisikan variabel $lokasi yang menampung fupload dan lokasi sementara
$nama_file = $_FILES['fupload']['name']; //mendefinisikan variabel $name_file untuk menampung fupload dan name
$deskripsi = $_POST['deskripsi']; //mendefinisikan variabel $deskripsi untuk menampung deskripsi
$direktori = "c:/xampp/htdocs/Prak PWD/Pertemuan 1/Kegiatan/upload_file/$nama_file"; //mendefinisikan variabel $direktori untuk tempat penyimpanan file yang nantinya akan diupload

//membuat percabangan, jika file sudah diupload maka file tersebut akan berpindah dari temporary penyimpanan ke direktori yang sudah dituju
if(move_uploaded_file($lokasi_file, $direktori)) {
    echo "Nama File : <b>$nama_file</b> berhasil di upload <br>";
    echo "Deskripsi File :<br>$deskripsi";
}else {
    echo "File gagal diupload";
}

?> <!-- tag penutup program php -->
