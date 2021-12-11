<?php

// Buat koneksi database menggunakan file konfigurasi
include_once("koneksi.php");

// Mengambil semua data pengguna dari database
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>

<html>
    <head>
        <title>Halaman Utama</title> <!-- tulisan yang tampil di tab browser-->
    </head>
    
    <body>
    <!-- menghubungkan tambah.php (halaman menambahkan data) dengan mengklik tulsian “Tambahdata baru”-->
    <a href="tambah.php">Tambah Data Baru</a><br/></br>

    <table width='80%' border=1> <!--Membuat tabel dengan lebar 80% dan ketebalan garis tepi = 1-->
        
        <tr> <!-- digunakan untuk medefinisikan sebuah baris p-->
        <th>NIM</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th>
        <th>Tgl Lahir</th> <th>Update</th> 
        <!--digunakan untuk membuat isi dari baris pada tabel-->
        </tr>

<?php
    // kondisi untuk menampilkan hasil dari data yang dimasukkan
    while($user_data = mysqli_fetch_array($result)) {
    echo "<tr>";
        echo "<td>".$user_data['nim']."</td>"; // variable $user_data menerima data yang masuk dari kolom nim dan seterusnya
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jkel']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['tgllhr']."</td>";
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a
        href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
        // menghubungkan edit.php untuk mengedit data dan delete.php untuk menghapus data
}
?>
    </table>
    <br><a href="lap_mhs.php">Cetak</a>
    </body>
</html>