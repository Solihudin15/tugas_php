<?php
include "config.php";
$members = mysqli_query($connection, "SELECT * FROM anggota");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keanggotaan Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #navbar{
            display: flex;
            background-color: skyblue;
            padding: 7px;
            margin-bottom: 10px;
        }
        #navbar a{
            text-decoration: none;
        }
        #logo{
            font-weight: 700;
            font-size: 30px;
        }
        #logo a{
            color: red;
        }
        #logo a span{
            color: white;
        }
        #menu {
            margin-top: 10px;
            font-weight: 500;
            font-size: 18px;
        }
        #menu a{
            color: white;
        }
        h4 {
            text-align: center;
            padding-top: 10px;
            padding-left: 20px;
        }
        table{
            border: 2px solid black;
            border-collapse: collapse;
            margin-bottom: 50px;
        }
        tr, td{
            text-align: center;
            border: 2px solid black;
            border-collapse: collapse;
            padding: 7px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div id="navbar">
        <div class="col-md-1"></div>
        <div id="logo" class="col-md-7"><a href="index.php">Perpustakaan<span>Kita</span></a></div>
        <div id="menu" class="col-md-1 text-center"><a href="index.php">Anggota</a></div>
        <div id="menu" class="col-md-1 text-center"><a href="buku.php">Buku</a></div>
        <div id="menu" class="col-md-1 text-center"><a href="peminjaman.php">Peminjaman</a></div>
        <div class="col-md-1"></div>
    </div>
    <!-- tabel -->
    <div id="container2" class="container">
        <div class="col-md-12">
            <h4>Data Keanggotaan Perpustakaan</h4>
            <table align="center">
                <tr style="background-color: cyan;">
                    <td style="text-align: center; font-weight: 700;">No.</td>
                    <td style="text-align: center; font-weight: 700;">Nama</td>
                    <td style="text-align: center; font-weight: 700;">Jenis Kelamin</td>
                    <td style="text-align: center; font-weight: 700;">No.Telp</td>
                    <td style="text-align: center; font-weight: 700;">Alamat</td>
                    <td style="text-align: center; font-weight: 700;">Email</td>
                    <td style="text-align: center; font-weight: 700;">Terdaftar Sejak</td>
                    <td style="text-align: center; font-weight: 700;">Role</td>
                </tr>
                    <?php
                    $no = 1;
                    while($member = mysqli_fetch_array($members)){ 
                        if ($no % 2 == 0) { ?>
                            <tr style="background-color: lightgrey;">
                                <td><?php echo $no ?></td>
                                <td><?php echo $member["nama"] ?></td>
                                <td><?php echo $member["sex"] ?></td>
                                <td><?php echo $member["telp"] ?></td>
                                <td><?php echo $member["alamat"] ?></td>
                                <td><?php echo $member["email"] ?></td>
                                <td><?php echo date("d F Y",strtotime($member["tgl_entry"]))?></td>
                                <td><?php echo $member["role"] ?></td>
                            </tr>
                        <?php } else {?>
                            <tr style="background-color: white;">
                                <td><?php echo $no ?></td>
                                <td><?php echo $member["nama"] ?></td>
                                <td><?php echo $member["sex"] ?></td>
                                <td><?php echo $member["telp"] ?></td>
                                <td><?php echo $member["alamat"] ?></td>
                                <td><?php echo $member["email"] ?></td>
                                <td><?php echo date("d F Y",strtotime($member["tgl_entry"]))?></td>
                                <td><?php echo $member["role"] ?></td>
                            </tr>
                            <?php } ?>
                    <?php $no++ ?>
                    <?php } ?>
                </table>
        </div>
    </div>
</body>
</html>