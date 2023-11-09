<?php
include "config.php";
$members = mysqli_query($connection, "SELECT * FROM anggota");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- CDN Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/styleku.css">
</head>
<body>
    <!-- Navbar -->
    <div id="navbar" style="display: flex;">
        <div class="col-md-1"></div>
        <div id="logo" class="col-md-7"><a href="index.php">Perpustakaan<span>Kita</span></a></div>
        <div id="menu" class="col-md-1 text-center"><a href="index.php">Anggota</a></div>
        <div id="menu" class="col-md-1 text-center"><a href="penerbit.php">Penerbit</a></div>
        <div id="menu" class="col-md-1 text-center"><a href="pengarang.php">Pengarang</a></div>
        <div class="col-md-1"></div>
    </div>
    <h4 class="text-center">Data Anggota Perpustakaan</h4>
    <!-- Tabel -->
    <div class="container-fluid mb-2">
        <a class="btn btn-primary btn-sm mb-2" href="tambah_anggota.php">Tambah Data</a>
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">No.Telp</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Terdaftar</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while($member = mysqli_fetch_array($members)){ 
                        if ($no % 2 == 0) { ?>
                            <tr class="text-center">
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
                                <td class="d-flex">
                                    <a href="edit_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="delete_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </td>
                            </tr>
                        <?php } else {?>
                            <tr class="text-center">
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
                                <td class="d-flex">
                                    <a href="edit_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="delete_anggota.php?id=<?php echo $member["id_anggota"]?>" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php $no++ ?>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</body>
</html>
<!-- Data Tables -->
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


