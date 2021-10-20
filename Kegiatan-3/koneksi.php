<?php

$host="localhost";
$username="root";
$password="";
$databasename="akademik2"; //nama database
$con=@mysqli_connect($host,$username,$password,$databasename);

//Mengetahui apakah fungsi @mysqli_connect() ini terhubung dengan database atau tidak
if (!$con) {
    //untuk memberitahukan ke kita bagian mana atau baris berapa yang error
    echo "Error: " . mysqli_connect_error();
    exit();
}
