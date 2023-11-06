<?php
    include "config.php";
    
    $id = $_GET['id'];
    
    mysqli_query($connection, "DELETE FROM pengarang WHERE id_pengarang = '$id' ");
    
    header("location:pengarang.php");
?>