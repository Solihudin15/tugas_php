<?php
    $nama = $_POST['nama'];
    $username_anggota = $_POST['username'];
    $password_anggota = $_POST['password'];
    $sex = $_POST['sex'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $tgl_entry = $_POST['tgl_entry'];
    $role = $_POST['role'];
    
    include "../config.php";
    
    mysqli_query($connection,
    "INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`, `tgl_entry`, `role`) 
    VALUES ('$nama', '$username_anggota', '$password_anggota', '$sex', '$telp', '$alamat', '$email', '$tgl_entry', '$role') ");
    
    header("location:../index.php");
?>