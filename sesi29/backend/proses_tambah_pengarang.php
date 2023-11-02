<?php
    $id_pengarang = $_POST['id_pengarang'];
    $nama = $_POST['nama_pengarang'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    
    include "../config.php";
    
    mysqli_query($connection,
    "INSERT INTO `pengarang` (`id_pengarang`,`nama_pengarang`, `email`, `telp`, `alamat`) 
    VALUES ('$id_pengarang','$nama', '$email', '$telp', '$alamat') ");
    
    header("location:../pengarang.php");
?>