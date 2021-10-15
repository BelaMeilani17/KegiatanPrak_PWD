<?php //kode wajib untuk membuka program php
echo "<head><title>My Guest Book</title></head>"; //menampilkan judul pada sebuah halaman website

$fp = fopen("guestbook.txt","r"); //mendefinisikan variabel $fp untuk membuka file guestbook.txt dengan fungsi fopen() dan mode "r" agar dapat membaca isi file tersebut
echo "<table border=0>"; //menampilkan tabel dengan garis tepi = 0
while ($isi = fgets($fp,80)){
    $pisah = explode("|",$isi); //membuat variabel $pisah yang digunakan untuk pemisah string pada file guestbook.txt dengan tanda "|"
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Komentar </td><td>: $pisah[4]</td></tr>
        <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>"; //tag penutup pembuatan tabel 
echo "<a href=index.html> Klik Disini </a>Isi Form Buku Tamu"; //membuat hyperlink yang akan dituju yaitu index.html untuk mengisi Form Buku Tamu
?> <!--tag penutup program php-->
