<?php
    //untuk memanggil file koneksi.php supaya dapat terkoneksi ke database
    include "koneksi.php";

    //digunakan untuk menentukan jenis file dan halaman web kode
    //sehingga browser akan menentukan dalam bentuk kode apa halaman yang akan ditampilkan
    header('Content-Type: text/xml');

    //query untuk menampilkan semua informasi yang ada di tabel mahasiswa
    $query = "SELECT * FROM mahasiswa";

    //untuk mengeksekusi/menjalankan perintah $query yang sudah dideklarasikan ke database MYSQL 
    $hasil = mysqli_query($con,$query);

    //untuk mengembalikan jumlah bidang dalam hasil SET
    $jumField = mysqli_num_fields($hasil);
    
    echo "<?xml version='1.0'?>"; //menampilkan halaman xml dengan versi 1.0
    echo "<data>"; //menampilkan tag pembuka data

    //perulangan untuk memanggil data yang ada di database 
    while ($data = mysqli_fetch_array($hasil))
    {
        //menampilkan tag pembuka mahasiswa
        echo "<mahasiswa>"; 

        //menampilkan isi data dari atribut nim yang diapit oleh tag pembuka dan tag penutup nim
        echo"<nim>",$data['nim'],"</nim>"; 

        //menampilkan isi data dari atribut nama yang diapit oleh tag pembuka dan tag penutup nama
        echo"<nama>",$data['nama'],"</nama>";

        //menampilkan isi data dari atribut jkel yang diapit oleh tag pembuka dan tag penutup jkel
        echo"<jkel>",$data['jkel'],"</jkel>";
        
        //menampilkan isi data dari atribut alamat yang diapit oleh tag pembuka dan tag penutup alamat
        echo"<alamat>",$data['alamat'],"</alamat>";

        //menampilkan isi data dari atribut tgllhr yang diapit oleh tag pembuka dan tag penutup tgllhr
        echo"<tgllhr>",$data['tgllhr'],"</tgllhr>";

        echo "</mahasiswa>"; //menampilkan tag penutup mahasiswa
    }
    echo "</data>"; //menampilkan tag penutup data

?>