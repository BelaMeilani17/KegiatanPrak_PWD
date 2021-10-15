<!DOCTYPE html> <!-- deklarasi pada dokumen HTML5 yang berfungsi untuk memberikan informasi kepada web browser tentang versi dokumen HTML yang bersangkutan-->
<html lang="en"> <!--memberitahu browser bahwa semua konten di halaman tersebut adalah bahasa inggris-->
<head> <!-- //tag untuk membuat informasi tentang dokumen -->
    <meta charset="UTF-8"> <!--untuk memberi instruksi kepada web browser untuk menerjemahkan karakter-karakter di halaman HTML sebagai UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE-edge"> <!-- mendefinisikan dokumen HTML agar ditampilkan pada Internet Explorer versi terbaru -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--untuk mengontrol bagaimana dokumen HTML ditampilkan pada perangkat mobile berupa pengaturan lebar layar perangkat, tingkat pembesaran (zooming) awal -->
    <title>Upload File</title> <!-- tag untuk memberikan judul pada halaman website -->
</head> <!-- tag penutup informasi tentang dokumen -->
<body> <!-- tag untuk membuat tubuh dari sebuah halaman website -->
    <form enctype="multipart/form-data" method="post" action="upload.php"> <!--atribut enctype yang berperan menentukan bagaimana data form dikirim ke server dengan value multipart/enctype artinya tidak ada karakter yang dikodekan -->
        File yang diupload : <input type="file" name="fupload"><br> <!-- selain itu, karena menggunakan komponen input type="file" dan berhubungan dengan gambar/file yang akan diupload, maka harus menggunakan enctype="multipart/form-data -->
        Deskripsi File : <br><textarea name="deskripsi" rows="6" cols="20"></textarea></br> <!--textarea untuk membuat sebuah kontrol input multibaris yang akan digunakan pada kolom deskripsi file -->
        <input type=submit value=Upload>  <!-- digunakan untuk memulai proses pengolahan data dengan value Upload-->
    </form> <!-- tag penutup pembuatan form -->

    <br> <!-- tag untuk membuat garis baru -->
    <a href="download.php">klik untuk download</a> <!--membuat hyperlink yang akan dituju yaitu download.php untuk mendownload file -->
</body>
</html> <!-- tag penutup dokumen HTML-->
