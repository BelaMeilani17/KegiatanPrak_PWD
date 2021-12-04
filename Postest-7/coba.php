<?php
    session_start(); //memulai session
    include "koneksi.php"; //koneksi ke database
    
    //mendefinisikan variabel yang di dapat dari form
    $id_user = $_POST['id_user'];
    $pass=md5($_POST['paswd']);
    
    //untuk melihat users dimana yang diambil adalah id_user dan password
    $sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
    
    //Percabangan yang dieksekusi ketika ada seasson dari captcha, dengan kata lain jika
    //captcha benar maka akan di eksekusi jika salah maka akan di kembalikan ke else
    if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
        $login=mysqli_query($con,$sql); //

        //untuk mengetahui berapa jumlah baris di dalam tabel database yang dipanggil oleh 
        //perintah mysql_query()
        $ketemu=mysqli_num_rows($login); 
        
        //menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik
        $r= mysqli_fetch_array($login);
        
        //percabangan jika isi dari mysli_num_rows kosong maka akan kembali ke login
        if ($ketemu > 0){
            //Mendefinisikan variable session yang di ambil dari perulangan mysqli_fetch_array($login);
            $_SESSION['iduser'] = $r['id_user'];
            $_SESSION['passuser'] = $r['password'];
        
            echo"USER BERHASIL LOGIN<br>";
            echo "id user =",$_SESSION['iduser'],"<br>";
            echo "password=",$_SESSION['passuser'],"<br>";
            echo "<a href=logout.php><b>LOGOUT</b></a></center>";
        } else{
            echo "<center>Login gagal! username & password tidak benar<br>";
            echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
        }
            mysqli_close($con);
    }
    else {
        echo "<center>Login gagal! Captcha tidak sesuai<br>";
        echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; 
    }
?>