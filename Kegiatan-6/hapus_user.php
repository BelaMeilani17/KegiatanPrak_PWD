<?php
    include "koneksi.php";
    $sql="delete from users where id_user= '$_GET[id_user]'";
    mysqli_query($con, $sql);
    mysqli_close($conn);
    
    header('location:tampil_user.php');
?>