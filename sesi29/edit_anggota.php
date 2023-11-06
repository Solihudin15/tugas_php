<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Keanggotaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
    include "config.php";
    $id = $_GET["id"];
    
    $members = mysqli_query($connection, "SELECT * FROM anggota WHERE id_anggota = '$id' ");
    
    foreach ($members as $member){
        $nama = $member['nama'];
        $username_anggota = $member['username'];
        $password_anggota = $member['password'];
        $sex = $member['sex'];
        $telp = $member['telp'];
        $alamat = $member['alamat'];
        $email = $member['email'];
        $tgl_entry = $member['tgl_entry'];
        $role = $member['role'];
    }
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-4">Edit Data Keanggotaan</h3>
                <form action="backend/proses_edit_anggota.php?id=<?php echo $id;?>" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td>
                                <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Username
                            </td>
                            <td>
                                <input type="text" name="username" class="form-control" value="<?php echo $username_anggota; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                <input type="text" name="password" class="form-control" value="<?php echo $password_anggota; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                jenis Kelamin
                            </td>
                            <td style="display: flex;">
                                <div class="form-check">
                                    <?php
                                        if($sex == 'L'){
                                            echo'<input class="form-check-input" type="radio" 
                                            name="sex" value="L" checked>';
                                        } else {
                                            echo'<input class="form-check-input" type="radio" 
                                            name="sex" value="L">';
                                        }
                                    ?>                                
                                <label class="form-check-label">
                                    Laki-Laki
                                </label>
                                </div>
                                <div class="form-check" style="margin-left: 50;">
                                <?php
                                        if($sex == 'P'){
                                            echo'<input class="form-check-input" type="radio" 
                                            name="sex" value="P" checked>';
                                        } else {
                                            echo'<input class="form-check-input" type="radio" 
                                            name="sex" value="P">';
                                        }
                                    ?>  
                                <label class="form-check-label">
                                    Perempuan
                                </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                No. Telpon
                            </td>
                            <td>
                                <input type="number" name="telp" class="form-control" value="<?php echo $telp; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                <textarea class="form-control" name="alamat" rows="5"><?php echo $alamat; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tanggal Daftar
                            </td>
                            <td>
                                <input type="date" name="tgl_entry" class="form-control" value="<?php echo date('Y-m-d', strtotime($tgl_entry)); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Role
                            </td>
                            <td style="display: flex;">
                                <div class="form-check">
                                    <?php
                                        if ($role == 'ADMIN') {
                                            echo '<input class="form-check-input" 
                                            type="radio" name="role" value="ADMIN" checked>';
                                        }else{
                                            echo '<input class="form-check-input" 
                                            type="radio" name="role" value="ADMIN">';
                                        }
                                    ?>
                                <label class="form-check-label">
                                    Admin
                                </label>
                                </div>
                                <div class="form-check" style="margin-left: 70;">
                                    <?php
                                        if ($role == 'USER') {
                                            echo '<input class="form-check-input" 
                                            type="radio" name="role" value="USER" checked>';
                                        }else{
                                            echo '<input class="form-check-input" 
                                            type="radio" name="role" value="USER">';
                                        }
                                    ?>
                                <label class="form-check-label">
                                    User
                                </label>
                                </div>
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