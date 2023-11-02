<?php
include "config.php";
$Publishers = mysqli_query($connection, "SELECT * FROM penerbit");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerbit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #add {
            margin-left: 200;
            text-decoration: none;
        }
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
        <div id="menu" class="col-md-1 text-center"><a href="penerbit.php">Penerbit</a></div>
        <div id="menu" class="col-md-1 text-center"><a href="pengarang.php">Pengarang</a></div>
        <div class="col-md-1"></div>
    </div>
    <!-- tabel -->
    <div id="container2" class="container">
        <div class="col-md-12">
            <h4>Data Penerbit Buku</h4>
            <a href="tambah_penerbit.php" id="add">Tambah Data</a>
            <table align="center">
                <tr style="background-color: cyan;">
                    <td style="text-align: center; font-weight: 700;">No.</td>
                    <td style="text-align: center; font-weight: 700;">ID Penerbit</td>
                    <td style="text-align: center; font-weight: 700;">Nama</td>
                    <td style="text-align: center; font-weight: 700;">Email</td>
                    <td style="text-align: center; font-weight: 700;">No.telpon</td>
                    <td style="text-align: center; font-weight: 700;">Alamat</td>
                </tr>
                    <?php
                    $no = 1;
                    while($publiser = mysqli_fetch_array($Publishers)){ 
                        if ($no % 2 == 0) { ?>
                            <tr style="background-color: lightgrey;">
                                <td><?php echo $no ?></td>
                                <td><?php echo $publiser["id_penerbit"] ?></td>
                                <td><?php echo $publiser["nama_penerbit"] ?></td>
                                <td><?php echo $publiser["email"] ?></td>
                                <td><?php echo $publiser["telp"] ?></td>
                                <td><?php echo $publiser["alamat"] ?></td>
                            </tr>
                        <?php } else {?>
                            <tr style="background-color: white;">
                                <td><?php echo $no ?></td>
                                <td><?php echo $publiser["id_penerbit"] ?></td>
                                <td><?php echo $publiser["nama_penerbit"] ?></td>
                                <td><?php echo $publiser["email"] ?></td>
                                <td><?php echo $publiser["telp"] ?></td>
                                <td><?php echo $publiser["alamat"] ?></td>
                            </tr>
                            <?php } ?>
                    <?php $no++ ?>
                    <?php } ?>
                </table>
        </div>
    </div>
</body>
</html>