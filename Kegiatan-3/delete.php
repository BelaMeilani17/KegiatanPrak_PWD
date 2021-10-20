<?php
// Menyertakan file koneksi database
include_once("koneksi.php");

// Dapatkan id dari URL untuk menghapus pengguna
$nim = $_GET['nim'];

// Hapus baris pengguna dari tabel berdasarkan id yang diberikan
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");

// Setelah delete redirect ke Home, maka akan muncul daftar user terbaru.
header("Location:index.php");
