<?php
    $id = $_GET['id'];
    $nama_pengarang = $_POST['nama_pengarang'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    
    include "../config.php";
    
    mysqli_query($connection, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email',
    telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id' ");
    
    header("location:../pengarang.php");
?>