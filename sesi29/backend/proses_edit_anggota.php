<?php
    $id = $_GET['id'];
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
    
    mysqli_query($connection, "UPDATE anggota SET nama = '$nama', username = '$username_anggota', password = '$password_anggota',
    sex = '$sex', telp = '$telp', alamat = '$alamat', email = '$email', tgl_entry = '$tgl_entry', role = '$role' WHERE id_anggota = '$id' ");
    
    header("location:../index.php");
?>