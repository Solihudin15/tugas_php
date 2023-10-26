<?php
include "config.php";
$query = mysqli_query($connection, "SELECT * FROM anggota");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keanggotaan Perpustakaan</title>
    <style>
        header{
            background-color: skyblue;
            text-align: center;
        }
        h3 {
            padding-top: 10px;
            padding-left: 20px;
            padding-bottom: 10px;
        }
        table{
            border: 2px solid black;
            border-collapse: collapse;
            margin-top: 30px;
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
<header>
    <h3>Data Keanggotaan Perpustakaan</h3>
</header>
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
        while($anggota = mysqli_fetch_array($query)){ 
            if ($no % 2 == 0) { ?>
                <tr style="background-color: lightgrey;">
                    <td style="text-align: center;"><?php echo $no ?></td>
                    <td><?php echo $anggota["nama"] ?></td>
                    <td style="text-align: center;"><?php echo $anggota["sex"] ?></td>
                    <td><?php echo $anggota["telp"] ?></td>
                    <td><?php echo $anggota["alamat"] ?></td>
                    <td><?php echo $anggota["email"] ?></td>
                    <td><?php echo $anggota["tgl_entry"] ?></td>
                    <td style="text-align: center;"><?php echo $anggota["role"] ?></td>
                </tr>
            <?php } else {?>
                <tr style="background-color: white;">
                    <td style="text-align: center;"><?php echo $no ?></td>
                    <td><?php echo $anggota["nama"] ?></td>
                    <td style="text-align: center;"><?php echo $anggota["sex"] ?></td>
                    <td><?php echo $anggota["telp"] ?></td>
                    <td><?php echo $anggota["alamat"] ?></td>
                    <td><?php echo $anggota["email"] ?></td>
                    <td><?php echo $anggota["tgl_entry"] ?></td>
                    <td style="text-align: center;"><?php echo $anggota["role"] ?></td>
                </tr>
                <?php } ?>
        <?php $no++ ?>
        <?php } ?>
    </table>
</body>
</html>