<?php
    include 'koneksi.php'; //menghubungkan ke database
?>

<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
    <form action="" method="get">  <!--menggunakan method get -->
        <label>Cari :</label> <!-- digunakan untukmerepresentasikan sebuah judul untuk item control -->
        <input type="text" name="cari"> <!-- digunakan sebagai kolom isian pencarian oleh user -->
        <input type="submit" value="Cari"> <!-- digunakan untuk memulai proses pengolahan data yaitu melakukan proses pencarian-->
    </form>

<?php
    if(isset($_GET['cari'])){ //mengambil data dari kolom cari
        $cari = $_GET['cari']; //mendeklarasikan variabel cari dengan fungsi GET untuk menampung datanya
        echo "<b>Hasil pencarian : ".$cari."</b>"; //menampilkan hasil pencarian 
    }
?>

<table border="1">
    <tr>
        <th>No</th> <!--Membuat header dengan nama No -->
        <th>Nama</th> <!--Membuat header dengan judul nama dari mahasiswa -->
    </tr>
    
    <?php
    if(isset($_GET['cari'])){ //mengambil data dari variabel cari
        $cari = $_GET['cari']; //mendeklarasikan variabel cari dengan fungsi GET untuk menampung datanya
        
        
        //untuk menampilkan data dari tabel mahasiswa berdasarkan Nama yang diinputkan oleh user dalam pencarian
        $sql="select * from mahasiswa where nama like'%".$cari."%'";
        
        //menghubungkan syntak SQL di baris sebelumnya
        $tampil = mysqli_query($con,$sql);
    }else{
        //menampilkan semua data yang ada di tabel mahasiswa
        $sql="select * from mahasiswa";

        //menghubungkan syntak SQL di baris sebelumnya
        $tampil = mysqli_query($con,$sql);
    }
    $no = 1;
    while($r = mysqli_fetch_array($tampil)){
    ?>

    <tr>
        <td><?php echo $no++; ?></td> <!-- increment pada header nomor -->
        <td><?php echo $r['nama']; ?></td> <!--Menampilkan isi variabel nama berdasarkan inputan yang dilakukan oleh user -->
    </tr>
    <?php } ?>
</table>