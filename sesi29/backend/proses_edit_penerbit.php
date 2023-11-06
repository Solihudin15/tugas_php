<?php
    $id = $_GET['id'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    
    include "../config.php";
    
    mysqli_query($connection, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email',
    telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id' ");
    
    header("location:../penerbit.php");
?>