<?php
    session_start(); //Memulai season
    $random_alpha = md5(rand()); //Membuat variable yang berisi random dengan enskripsi MD5

    //Memotong variable md5 mulai dari index ke-0 (karakter ke-1) dan ambil sebanyak 6 karakter.
    $captcha_code = substr($random_alpha, 0, 6); 
    
    //Membuat season dengan nama captcha_code dengan isinya variable pada line 4
    $_SESSION["captcha_code"] = $captcha_code; 

    //Fungsi ini mengembalikan gambar kosong dengan ukuran tertentu dengan lebar 70 dan tinggi 30
    $target_layer = imagecreatetruecolor(70,30); 

    //Mengalokasikan warna Vivid Tangerinec untuk bacground
    $captcha_background = imagecolorallocate($target_layer, 255, 160, 119); 

    //Background fill dengan warna yang dipilih pada variable captcha_background
    imagefill($target_layer,0,0,$captcha_background); 
    
    $captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); //Mengalokasikan warna hitam untuk text
    
    imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
    
    header("Content-type: image/jpeg"); //digunakan untuk membaut string secara horizontal
    
    imagejpeg($target_layer); //Keluarkan gambar ke browser
?>