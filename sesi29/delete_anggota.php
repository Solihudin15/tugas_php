<?php
    include "config.php";
    
    $id = $_GET['id'];
    
    mysqli_query($connection, "DELETE FROM anggota WHERE id_anggota = '$id' ");
    
    header("location:index.php");
?>