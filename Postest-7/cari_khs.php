<?php
include 'koneksi.php'; //menghubungkan ke database
?>

<h3>Form Pencarian DATA KHS Dengan PHP</h3>

<form action="" method="get"> <!--menggunakan method get -->
    <label for="">Cari : </label> <!-- digunakan untukmerepresentasikan sebuah judul untuk item control -->
    <input type="text" name="cari">  <!-- digunakan sebagai kolom isian pencarian oleh user -->
    <input type="submit" value="Cari"> <!-- digunakan untuk memulai proses pengolahan data yaitu melakukan proses pencarian-->
</form>

<?php
$result = 0;
if (isset($_GET['cari'])){ //mengambil data dari kolom cari
    $cari = $_GET['cari']; //mendeklarasikan variabel cari dengan fungsi GET untuk menampung datanya
    echo "<b> Hasil Pencarian : ".$cari."</b>"; //menampilkan hasil pencarian 
}
?>

<table border="1">
    <tr>
        <th>No</th> <!--Membuat header dengan nama No -->
        <th>NIM</th> <!--Membuat header dengan nama NIM-->
        <th>Nama</th>
        <th>Kode MK</th> <!--Membuat header dengan nama Kode MK-->
        <th>Nama Matkul</th>
        <th>Nilai</th> <!--Membuat header dengan nama NIlai-->
    </tr>
    <?php

        if(isset($_GET['cari'])){ //mengambil data dari variabel cari
            $cari = $_GET['cari']; //mengambil data dan menyimpannya di variabel cari

            //untuk menampilkan data dari tabel khs berdasarkan NIM yang diinputkan oleh user dalam pencarian
            $sql = "SELECT * FROM khs INNER JOIN mahasiswa ON khs.NIM = mahasiswa.nim INNER JOIN matakuliah ON khs.kodeMK = matakuliah.kode WHERE khs.NIM = '".$cari."'"; 
            
            $tampil = mysqli_query($con,$sql);  //menghubungkan syntak SQL di baris sebelumnya
        } else{
            //menampilkan semua data yang ada di tabel khs
            $sql = "SELECT * FROM khs INNER JOIN mahasiswa ON khs.NIM = mahasiswa.nim INNER JOIN matakuliah ON khs.kodeMK = matakuliah.kode"; 
            $tampil = mysqli_query($con,$sql);  //menghubungkan syntak SQL di baris sebelumnya
        }
        $no = 1;

        //menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik
        while($r = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $r['NIM']; ?></td> <!-- Menampilkan isi variabel NIM berdasarkan inputan yang dilakukan oleh user-->
            <td><?php echo $r['nama']; ?></td> 
            <td><?php echo $r['kodeMK']; ?></td> <!-- Menampilkan isi variabel kodeMK berdasarkan inputan yang dilakukan oleh user-->
            <td><?php echo $r['namaMK'] ?></td>
            <td><?php echo $r['nilai']; ?></td> <!-- Menampilkan isi variabel nilai berdasarkan inputan yang dilakukan oleh user-->
        </tr>
        <?php } ?>
</table>