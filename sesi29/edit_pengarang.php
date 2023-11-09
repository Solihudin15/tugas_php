<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penerbit</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/styleku.css">
</head>
<?php
    include("config.php");
    $id = $_GET['id'];
    
    $authors = mysqli_query($connection, "SELECT * FROM pengarang WHERE id_pengarang = '$id' ");
    
    foreach ($authors as $author){
        $nama_pengarang = $author['nama_pengarang'];
        $email = $author['email'];
        $telp = $author['telp'];
        $alamat = $author['alamat'];
    }
?>
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
    <!-- Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-2 mb-2">Edit Data Pengarang</h3>
                <form action="backend/proses_edit_pengarang.php?id=<?php echo $id;?>" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                ID Penerbit
                            </td>
                            <td>
                                <input type="text" name="id_pengarang" class="form-control" disabled value="<?php echo $id ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td>
                                <input type="text" name="nama_pengarang" class="form-control" value="<?php echo $nama_pengarang ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                No. Telpon
                            </td>
                            <td>
                                <input type="number" name="telp" class="form-control" value="<?php echo $telp ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                <textarea class="form-control" name="alamat" rows="5"><?php echo $alamat ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <input type="submit" name="submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>