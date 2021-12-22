<?php

$host="localhost";  //mendeklarasikan variabel nama host yaitu localhost
$username="root";   //mendeklarasikan variabel username dari mysql kita yaitu root
$password="";       //mendeklarasikan variabel password (jika ada)
$databasename="akademik2";  //mendeklarasikan nama database yang akan digunakan yaitu akademik2

//melakukan koneksi ke mysql server dengan beberapa variabel yang telah di deklarasikan 
// sehingga dapat terhubung dengan database
$con=@mysqli_connect($host,$username,$password,$databasename);

//Kondisi untuk mengecek apakah database sudah terkoneksi apa belum
//Jika belum maka akan tampil dimana letak errornya
if (!$con) {
    
    echo "Error: " . mysqli_connect_error();
    exit(); //menutup proses
}
