<?php
include "config.php";
$members = mysqli_query($connection, "SELECT * FROM anggota");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>
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
    <h4>Data Anggota Perpustakaan</h4>
    <a class="btn btn-primary btn-sm ms-4 mb-2" href="tambah_anggota.php">Tambah Data</a>
        <table align="center">
            <tr style="background-color: skyblue;">
                <td style="text-align: center; font-weight: 700;">No.</td>
                <td style="text-align: center; font-weight: 700;">Nama</td>
                <td style="text-align: center; font-weight: 700;">Username</td>
                <td style="text-align: center; font-weight: 700;">Password</td>
                <td style="text-align: center; font-weight: 700;">Jenis Kelamin</td>
                <td style="text-align: center; font-weight: 700;">No.Telpon</td>
                <td style="text-align: center; font-weight: 700;">Alamat</td>
                <td style="text-align: center; font-weight: 700;">Email</td>
                <td style="text-align: center; font-weight: 700;">Terdaftar Sejak</td>
                <td style="text-align: center; font-weight: 700;">Role</td>
                <td style="text-align: center; font-weight: 700;">Aksi</td>
            </tr>
                <?php
                $no = 1;
                while($member = mysqli_fetch_array($members)){ 
                    if ($no % 2 == 0) { ?>
                        <tr style="background-color: lightgrey;">
                            <td><?php echo $no ?></td>
                            <td><?php echo $member["nama"] ?></td>
                            <td><?php echo $member["username"] ?></td>
                            <td><?php echo $member["password"] ?></td>
                            <td><?php echo $member["sex"] ?></td>
                            <td><?php echo $member["telp"] ?></td>
                            <td><?php echo $member["alamat"] ?></td>
                            <td><?php echo $member["email"] ?></td>
                            <td><?php echo date("d F Y",strtotime($member["tgl_entry"]))?></td>
                            <td><?php echo $member["role"] ?></td>
                            <td>
                                <a href="edit_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="delete_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    <?php } else {?>
                        <tr style="background-color: white;">
                            <td><?php echo $no ?></td>
                            <td><?php echo $member["nama"] ?></td>
                            <td><?php echo $member["username"] ?></td>
                            <td><?php echo $member["password"] ?></td>
                            <td><?php echo $member["sex"] ?></td>
                            <td><?php echo $member["telp"] ?></td>
                            <td><?php echo $member["alamat"] ?></td>
                            <td><?php echo $member["email"] ?></td>
                            <td><?php echo date("d F Y",strtotime($member["tgl_entry"]))?></td>
                            <td><?php echo $member["role"] ?></td>
                            <td>
                                <a href="edit_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="delete_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php $no++ ?>
                <?php } ?>
        </table>
</body>
</html>