<?php
include "config.php";
$authors = mysqli_query($connection, "SELECT * FROM pengarang");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keanggotaan Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <div id="navbar">
        <div class="col-md-1"></div>
        <div id="logo" class="col-md-7"><a href="index.php">Perpustakaan<span>Kita</span></a></div>
        <div id="menu" class="col-md-1 text-center"><a href="index.php">Anggota</a></div>
        <div id="menu" class="col-md-1 text-center"><a href="penerbit.php">Penerbit</a></div>
        <div id="menu" class="col-md-1 text-center"><a href="pengarang.php">Pengarang</a></div>
        <div class="col-md-1"></div>
    </div>
    <!-- tabel -->
    <h4>Data Pengarang Buku</h4>
    <a class="btn btn-primary btn-sm mb-2" href="tambah_pengarang.php" style="margin-left: 270;">Tambah Data</a>
        <table align="center">
            <tr style="background-color: skyblue;">
                <td style="text-align: center; font-weight: 700;">No.</td>
                <td style="text-align: center; font-weight: 700;">ID Pengarang</td>
                <td style="text-align: center; font-weight: 700;">Nama</td>
                <td style="text-align: center; font-weight: 700;">Email</td>
                <td style="text-align: center; font-weight: 700;">No.telpon</td>
                <td style="text-align: center; font-weight: 700;">Alamat</td>
                <td style="text-align: center; font-weight: 700;">Aksi</td>
            </tr>
                <?php
                $no = 1;
                while($author = mysqli_fetch_array($authors)){ 
                    if ($no % 2 == 0) { ?>
                        <tr style="background-color: lightgrey;">
                            <td><?php echo $no ?></td>
                            <td><?php echo $author["id_pengarang"] ?></td>
                            <td><?php echo $author["nama_pengarang"] ?></td>
                            <td><?php echo $author["email"] ?></td>
                            <td><?php echo $author["telp"] ?></td>
                            <td><?php echo $author["alamat"] ?></td>
                            <td>
                                <a href="edit_pengarang.php?id=<?php echo $author["id_pengarang"]?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="delete_pengarang.php?id=<?php echo $author["id_pengarang"]?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    <?php } else {?>
                        <tr style="background-color: white;">
                            <td><?php echo $no ?></td>
                            <td><?php echo $author["id_pengarang"] ?></td>
                            <td><?php echo $author["nama_pengarang"] ?></td>
                            <td><?php echo $author["email"] ?></td>
                            <td><?php echo $author["telp"] ?></td>
                            <td><?php echo $author["alamat"] ?></td>
                            <td>
                                <a href="edit_pengarang.php?id=<?php echo $author["id_pengarang"]?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="delete_pengarang.php?id=<?php echo $author["id_pengarang"]?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php $no++ ?>
                <?php } ?>
        </table>
</body>
</html>