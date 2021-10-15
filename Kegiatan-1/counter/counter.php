<?php //kode wajib untuk membuka program php

$filecounter = "counter.txt"; //mendefinisikan nama file untuk menyimpan counter. counter.txt untuk menyimpan data counter

$fileload = fopen($filecounter, "r+"); //mendefinisikan variabel fileload untuk membuka file dengan menggunakan fungsi fopen dengan nama file $filecounter (yaitu file counter.txt) yang akan dituju dengan mode r+ (supaya dapat membaca atau menulis file dari awal).

$hit = fread($fileload, filesize($filecounter)); //mendefinisikan variabel $hit untuk membaca $fileload yang isinya berupa file counter.txt yang menggunakan fungsi filesize untuk ukuran file tersebut 
//fungsi echo untuk menampilkan ke layar

echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>"); // menampilkan tabel dengan lebar 250, align = posisi tabel ditengah, ukuran garis tepi=1, cellspacing (jarak antar garis tepi bagian dalam dan luar) = 0, cellpadding  (jarak dari border sisi dalam tabel dengan isi teks tabel itu sendiri) = 0, dan warna garis tepi/border yaitu biru.
// <tr> untuk pembuatan baris pada tabel

echo ("<td width=250 valign=middle align=center>");
//menampilkan kolom atau setiap sel disetiap baris pada tabel dengan lebar 250, valign = perataan pada tabel secara vertikal dengan membuat isi sel berada di tengah sel, align = membuat perataan di data tabel rata tengah

echo ("<font face=verdana size=2 color=#FF0000><b>");
//menampilkan jenis font verdana, ukuran huruf =2, warna font merah dan huruf cetak tebal.

echo ("Anda pengunjung yang ke : ");

echo ($hit); //memanggil variabel hit
echo ("</b></font>"); //sintaks penutup untuk mencetak tebal huruf dan pengaturan font
echo ("</td>"); //sintaks penutup untuk membuat kolom
echo ("</tr></table>"); //sintaks penutup untuk pembuatan baris dan tabel
fclose($fileload); //fclose untuk menutup proses file

$fl = fopen($filecounter, "w+"); //mendefinisikan variabel untuk counter dengan fopen dengan mode w+ untuk membaca, menulis, dan membuat file baru jika tidak ada.

$hit = $hit + 1; //mendefinisikan variabel $hit, dan jika website direfresh maka jumlah pengunjung akan bertambah satu

fwrite($fl, $hit, strlen($hit)); //untuk menulis ke file terbuka. fungsi akan berhenti pada akhir file atau saat mencapai panjang tertentu (strlen) pada variabel $hit

fclose($fl); //untuk menutup variabel $fl

