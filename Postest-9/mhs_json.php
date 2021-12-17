<?php
    //untuk memanggil file koneksi.php supaya dapat terkoneksi ke database
    include "koneksi.php";

    //menampilkan semua informasi yang ada di tabel mahasiswa 
    $sql="select * from mahasiswa order by nim";
    
    //untuk mengeksekusi/menjalankan perintah $ql yang sudah dideklarasikan ke database MYSQL
    $tampil = mysqli_query($con,$sql);

    //kondisi untuk mengetahui apakah terdapat data di dalam database
    if (mysqli_num_rows($tampil) > 0) {
        $no=1;
        $response = array();  //data yang ditampilkan pada objek $response dalam bentuk array
        
        //membuat objek baru dari $response yaitu data yang isinya berupa array.
        //dimana array ini untuk menampung data dari databasenya.
        $response["data"] = array(); 

        //perulangan untuk memanggil data yang ada di database dalam bentuk array
        while ($r = mysqli_fetch_array($tampil)) {
            //variabel $h digunakan untuk menampung data setiap atribut dalam tabel mahasiswa
            $h['nim'] = $r['nim'];
            $h['nama'] = $r['nama'];
            $h['jkel'] = $r['jkel'];
            $h['alamat'] = $r['alamat'];
            $h['tgllhr'] = $r['tgllhr'];

            //Mem-push data yang ada di setiap database ke objek data yang berupa array yaitu pada variabel $h
            array_push($response["data"], $h);
        }
        //untuk menampilkan data-data yang ada di database-nya berubah menjadi JSON
        echo json_encode($response);
    }
    else {
        //mendeklarasikan variabel $response dengan objek message, dimana message tersebut isinya tidak ada data"
        $response["message"]="tidak ada data";
        
        //untuk menampilkan data-data yang ada di database-nya berubah menjadi JSON
        echo json_encode($response); //
    }
?>